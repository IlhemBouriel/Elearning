<?php

namespace Etudiant\EtudiantBundle\Controller;
include("fpdf.php");
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Etudiant\EtudiantBundle\Entity\Etudiant;
use Etudiant\EtudiantBundle\Entity\Message;
use Etudiant\EtudiantBundle\Entity\Matiere; 
use Etudiant\EtudiantBundle\Entity\Qcm;
use Etudiant\EtudiantBundle\Entity\Question;
use Etudiant\EtudiantBundle\Entity\QuestionChoix;
use Etudiant\EtudiantBundle\Entity\Choix;
use Etudiant\EtudiantBundle\Entity\EtudiantMatiere;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

//0 for nothing
//1 for valid data
//2 error
//3 warning
class EtudiantController extends Controller
{
    public function indexAction()
    {
        return new Response('hello from the other side');
    }

    //Retourner le formulaire d'inscription
    public function getformAction()
    {
    	return $this->render('EtudiantEtudiantBundle:etudiant:form.html.twig',array('msg'=>' ','code'=>'0'));
    }

    //Insertion d'un etudiant
    public function insertAction(Request $request)
    {
    	 if ($request->getMethod() == 'POST')
    	 {
    	 	$login= $request->get('login');
    	 	$pass=$request->get('pass');
    	 	$pass1=$request->get('pass1');
    	 	$nom=$request->get('nom');
    	 	$prenom = $request->get('prenom');
    	 	$fac=$request->get('fac');
    	 	$mail=$request->get('mail');
    	 	if ($pass != $pass1)
    	 	{
    	 		  return $this->render('EtudiantEtudiantBundle:etudiant:form.html.twig',array('msg'=>'Invalid password!','code'=>'2'));
    	 	}
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('EtudiantEtudiantBundle:Etudiant');
               $user = $repository->findOneBy(array('login' => $login, 'password' => $pass));
            if ($user) {
              return $this->render('EtudiantEtudiantBundle:etudiant:form.html.twig',array('msg'=>'this student already exists','code'=>'3'));
    	      }
    	      else
    	      {
    	      	$etud = new Etudiant();
    	      	$etud->setLogin($login);
    	      	$etud->setPassword($pass);
    	      	$etud->setNomEtud($nom);
    	      	$etud->setPrenomEtud($prenom);
    	      	$etud->setFaculteEtud($fac);
    	      	$etud->setMailEtud($mail);
    	      	$em->persist($etud);
            $em->flush();
            $session = new Session();
            if(! $session)
            {
              $session->start();
            }
            $session->set('login',$login);
            $session->set('type','student');
            return $this->render('EtudiantEtudiantBundle:etudiant:home.html.twig',array('msg'=>'Account successfully created!','code'=>'1','id'=>'dash'));
            $session->set('pass',$pass);
    	    }
     
    }
  
}


//Retourner le formulaire de connexion
 public function connectAction()
    {
        return $this->render('EtudiantEtudiantBundle:etudiant:connect.html.twig',array('msg'=>' ','code'=>'0'));
    }

//Connexion
    public function gethomeAction(Request $request)
    {
       if ($request->getMethod() == 'POST')
         {
            $login= $request->get('login');
            $pass=$request->get('pass');
            /*if (($login=='admin')&&($pass=='admin'))
            {
            $em = $this->getDoctrine()->getEntityManager();
           $query = $em->createQuery(
                'SELECT m FROM EtudiantEtudiantBundle:Message m WHERE m.idRecep = 0 AND m.datelectureMsg = :var')->setParameter('var','NULL');;

  $msgs = $query->getResult();
$r=$em->getRepository('EtudiantEtudiantBundle:Etudiant');
$users=array();
foreach ($msgs as $m) {
  $user=$r->findOneBy(array('idEtud'=>$m->getIdEmet()));
  $users[$m->getIdEmet()]=$user;
}
  $repo = $em->getRepository('EtudiantEtudiantBundle:Message');
  $qb = $repo->createQueryBuilder('m');
$qb->select('COUNT(m)');
$qb->where('m.idRecep = 0')->where('m.datelectureMsg is NULL');

$nb = $qb->getQuery()->getSingleScalarResult();
                $session=new Session();
               if(! $session)
            {
              $session->start();
            }
            $session->set('nb',$nb);
            $session->set('type','admin');
 return $this->render('adminAdminBundle:admin:homeAdmin.html.twig',array('msgs'=>$msgs,'users'=>$users,'id'=>'dash'));
            }
            else
            {*/
                   $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('EtudiantEtudiantBundle:Etudiant');
            $user = $repository->findOneBy(array('login' => $login, 'password' => $pass));
            if ($user)
            {
            $session = new Session();
            if(! $session)
            {
              $session->start();
            }
            $session->set('login',$login);
            $session->set('type','student');
            return $this->render('EtudiantEtudiantBundle:etudiant:home.html.twig',array('msg'=>'Welcome Back!','code'=>'1','id'=>'dash'));
            }
            else
            {
                 return $this->render('EtudiantEtudiantBundle:etudiant:connect.html.twig',array('msg'=>'Unknown user','code'=>'2'));
            }
            //}

        }
        else
        {
          $session = new Session();
            if(! $session)
            {
              return $this->render('EtudiantEtudiantBundle:etudiant:connect.html.twig',array('msg'=>'Invalid URL','code'=>'2'));
            }
            else
            {
              if ($session->get('type')=='admin')
              {
                 $em = $this->getDoctrine()->getEntityManager();
           $query = $em->createQuery(
                'SELECT m FROM EtudiantEtudiantBundle:Message m WHERE m.idRecep = 0 AND m.datelectureMsg = :date'
  )->setParameter('date', '1990-12-31');
  $msgs = $query->getResult();
  $nb=0;
  foreach ($msgs as $msg) {
      $nb++;
  }
  return $this->render('adminAdminBundle:admin:homeAdmin.html.twig',array('msgs'=>$msgs));
              }
              else
              {
                  return $this->render('EtudiantEtudiantBundle:etudiant:home.html.twig',array('msg'=>'Home Page','code'=>'1','id'=>'dash'));
              }
            }
        }
        
    }

    //Deconnexion
    public function deconnectAction(Request $request)
    {
        $session = new Session();
      
      if ($session)
      {
       $session->clear();
      }
       return $this->render('EtudiantEtudiantBundle:etudiant:connect.html.twig',array('msg'=>'you have been disconnected successfully','code'=>'1'));
    }

    //Liste des matieres
    public function getallAction()
    {
        $session = new Session();
        if (! $session)
        {
             return $this->render('EtudiantEtudiantBundle:etudiant:connect.html.twig',array('msg'=>'No session','code'=>'2'));
        }
        else
        {
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('EtudiantEtudiantBundle:Matiere');
            $mts = $repository->findAll();
            $r=$em->getRepository('EtudiantEtudiantBundle:Etudiant');
            $me=$r->findOneBy(array('login'=>$session->get('login')));
            $rep=$em->getRepository('EtudiantEtudiantBundle:EtudiantMatiere');
            $suivis = $rep->findOneBy(array('idEtudAssoc'=> $me->getIdEtud()));
             $query = $em->createQuery(
                'SELECT m FROM EtudiantEtudiantBundle:EtudiantMatiere m WHERE m.idEtudAssoc = :var'
  )->setParameter('var', $me->getIdEtud());
  $suivis = $query->getResult();
             return $this->render('EtudiantEtudiantBundle:etudiant:ListAll.html.twig',array('id'=>'list','mat'=>$mts,'mine'=>$suivis,'idetud'=>$me->getIdEtud()));
            
        }
    }


   //Suivre un cours
    public function followAction(Request $request)
    {
        $idetud=$request->get('idet');
        $idmat=$request->get('idmat');
        $em = $this->getDoctrine()->getEntityManager();
        $assoc = new EtudiantMatiere();
        $assoc->setIdEtudAssoc($idetud);
        $assoc->setIdMatAssoc($idmat);
        $assoc->setNote(0);
        $em->persist($assoc);
        $em->flush();
        return new Response('etud:'.$idetud.'mat:'.$idmat);
    }

    //liste des cours suivis
    public function mineAction()
    {
        $session= new Session();
        if (! $session)
        {
            return $this->render('EtudiantEtudiantBundle:etudiant:connect.html.twig',array('msg'=>'No session','code'=>'2'));
        }
        else
        {
            $login = $session->get('login');
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('EtudiantEtudiantBundle:Etudiant');
            $me=$repository->findOneBy(array('login'=>$login));
             $query = $em->createQuery(
                'SELECT m FROM EtudiantEtudiantBundle:EtudiantMatiere m WHERE m.idEtudAssoc = :var'
  )->setParameter('var', $me->getIdEtud());
  $suivis = $query->getResult();
  $matrice = array();
  $tab=array();
  $r=$em->getRepository('EtudiantEtudiantBundle:Matiere');
  $repo=$em->getRepository('EtudiantEtudiantBundle:EtudiantMatiere');
  $i=0;
  $tot=0;
  foreach ($suivis as $assoc) {
      $c = $r->findOneBy(array('idMat'=>$assoc->getIdMatAssoc()));
      $matrice[$i]=$c;
      $i++;
      $qb = $repo->createQueryBuilder('a');
$qb->select('COUNT(a)');
$qb->where('a.idMatAssoc = :var');
$qb->setParameter('var', $assoc->getIdMatAssoc());

$nb = $qb->getQuery()->getSingleScalarResult();
$tab[$assoc->getIdMatAssoc()]=$nb;
                             }
         return $this->render('EtudiantEtudiantBundle:etudiant:ListSome.html.twig',array('id'=>'mine','courses'=>$matrice,'taille'=>$i,'tab'=>$tab,'idetud'=>$me->getIdEtud()));
        }
    }

    //ne plus suivre un cours
    public function deleteCourseAction(Request $request)
    {
        $etud=$request->get('idet');
        $mat=$request->get('idmat');
        $em=$this->getDoctrine()->getEntityManager();
        $repository=$em->getRepository('EtudiantEtudiantBundle:EtudiantMatiere');
        $assoc=$repository->findOneBy(array('idEtudAssoc'=>$etud,'idMatAssoc'=>$mat));
        $em->remove($assoc);
        $em->flush();
        return new Response('done');
    }

    //Ouvrir un cours
    public function openCourseAction(Request $request)
    {
      $chemin=$request->get('chemin');
      $content = shell_exec($chemin);
      return new Response('done');
    }

    //retourner la liste des resultats
    public function getResultAction()
    {
      $session = new Session();
      if (! $session)
      {
         return $this->render('EtudiantEtudiantBundle:etudiant:connect.html.twig',array('msg'=>'No session','code'=>'2'));
      }
      else
      {
        $mat = array();
        $em=$this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('EtudiantEtudiantBundle:Etudiant');
        $me=$repository->findOneBy(array('login'=>$session->get('login')));
        $query = $em->createQuery(
                'SELECT m FROM EtudiantEtudiantBundle:EtudiantMatiere m WHERE m.idEtudAssoc = :var'
  )->setParameter('var', $me->getIdEtud());
        $suivis = $query->getResult();
        $rep=$em->getRepository('EtudiantEtudiantBundle:Matiere');
        $i=0;
        foreach ($suivis as $value) {
          $m = $rep->findOneBy(array('idMat'=>$value->getIdMatAssoc()));
          $mat[$m->getIntituleMat()]=$value->getNote();
          $i++;
        }
return $this->render('EtudiantEtudiantBundle:etudiant:getResult.html.twig',array('nom'=>$me->getNomEtud(),'prenom'=>$me->getPrenomEtud(),'matrice'=>$mat,'id'=>'result','taille'=>$i));
      }
    }


    //ouvrir un cours pour amelioerer les resultats
    public function improveAction(Request $request)
    {
      $intitule = $request->get('course');
      $em=$this->getDoctrine()->getEntityManager();
      $rep = $em->getRepository('EtudiantEtudiantBundle:Matiere');
      $m = $rep->findOneBy(array('intituleMat'=>$intitule));
      shell_exec($m->getPathMat());
      return new Response('done');
    }

    //qcm par cours 
    public function qcmGroupByAction()
    {

     $session= new Session();
        if (! $session)
        {
            return $this->render('EtudiantEtudiantBundle:etudiant:connect.html.twig',array('msg'=>'No session','code'=>'2'));
        }
        else
        {
            $login = $session->get('login');
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('EtudiantEtudiantBundle:Etudiant');
            $me=$repository->findOneBy(array('login'=>$login));
             $query = $em->createQuery(
                'SELECT m FROM EtudiantEtudiantBundle:EtudiantMatiere m WHERE m.idEtudAssoc = :var'
  )->setParameter('var', $me->getIdEtud());
  $suivis = $query->getResult();
  $matrice = array();
  $tab=array();
  $note=array();
  $best=array();
  $certif=array();
  $r=$em->getRepository('EtudiantEtudiantBundle:Matiere');
  $repo=$em->getRepository('EtudiantEtudiantBundle:EtudiantMatiere');
  $i=0;
  foreach ($suivis as $assoc) 
  {
      $c = $r->findOneBy(array('idMat'=>$assoc->getIdMatAssoc()));
      $matrice[$i]=$c;
      $note[$assoc->getIdMatAssoc()]=$assoc->getNote();
      $i++;
        $qb = $repo->createQueryBuilder('a');
      $qb->select('COUNT(a)');
$qb->where('a.idMatAssoc = :var');
$qb->setParameter('var', $assoc->getIdMatAssoc());

$nb = $qb->getQuery()->getSingleScalarResult();
$tab[$assoc->getIdMatAssoc()]=$nb;
 $highest_id = $em->createQueryBuilder()
    ->select('MAX(e.note)')
    ->from('EtudiantEtudiantBundle:EtudiantMatiere', 'e')
    ->getQuery()
    ->getSingleScalarResult();
$best[$assoc->getIdMatAssoc()]=$highest_id;
$tab[$assoc->getIdMatAssoc()]=$nb;
$certif[$assoc->getIdMatAssoc()]=$c->getNbCertif();
  }
         return $this->render('EtudiantEtudiantBundle:etudiant:qcmGroupBy.html.twig',array('id'=>'qcm','courses'=>$matrice,'nb_inscrits'=>$tab,'best'=>$best,'certif'=>$certif,'note'=>$note,'taille'=>$i,'idetud'=>$me->getIdEtud()));
        }
    }



    //QCM pour chaque matiere
    public function getQcmAction(Request $request)
    {
      $idMat=$request->get('idMat');
      $idetud=$request->get('idetud');
      $em=$this->getDoctrine()->getEntityManager();
      $rep = $em->getRepository('EtudiantEtudiantBundle:EtudiantMatiere');
    $assoc = $rep->findOneBy(array('idEtudAssoc'=>$idetud,'idMatAssoc'=>$idMat));
    $nb=$assoc->getNote();
    $assoc->setNote(0);
    $em->flush();
      $repository=$em->getRepository('EtudiantEtudiantBundle:Qcm');
      $qcm=$repository->findOneBy(array('idMatQcm'=>$idMat));
      $idqcm=$qcm->getIdQcm();
       $query = $em->createQuery(
                'SELECT q FROM EtudiantEtudiantBundle:Question q WHERE q.idQcmQuest = :var'
  )->setParameter('var', $idqcm);
  $questions = $query->getResult();
  $QuestRep=array();
  $quest=array();
  $choices=array();
  $rep=$em->getRepository('EtudiantEtudiantBundle:Choix');
  $n=0;
  foreach ($questions as $question) {
    $n++;
    $query = $em->createQuery(
                'SELECT qc FROM EtudiantEtudiantBundle:QuestionChoix qc WHERE qc.idQuestAssoc = :var'
  )->setParameter('var', $question->getIdQuest());
  $choix = $query->getResult();
  $QuestRep[$question->getIdQuest()]=$choix;
  $quest[$question->getIdQuest()]=$question;
  foreach ($choix as $value) {
    $cc=$rep->findOneBy(array('idChoix'=>$value->getIdChoixAssoc()));
    $choices[$cc->getIdChoix()]=$cc;
  }
      
    }
    return $this->render('EtudiantEtudiantBundle:etudiant:qcmEnonce.html.twig',array('id'=>'qcm','QuestRep'=>$QuestRep,'questions'=>$quest,'choix'=>$choices,'idetud'=>$idetud,'idmat'=>$idMat,'nb'=>$n));
}
 
 //verifier la bonne reponse
public function verifyAction(Request $request)
{
  $session= new Session();
  if (! $session)
    {
      return $this->render('EtudiantEtudiantBundle:etudiant:connect.html.twig',array('msg'=>'Invalid URL','code'=>'2'));
    }
    else
    {
  $idq=$request->get('idq');
  $idc=$request->get('idc');
  $em=$this->getDoctrine()->getEntityManager();
  $repository=$em->getRepository('EtudiantEtudiantBundle:Choix');
  $c = $repository->findOneBy(array('idChoix'=>$idc));
  if ($c->getStatut()=='true')
  {

    $rep = $em->getRepository('EtudiantEtudiantBundle:EtudiantMatiere');
    $assoc = $rep->findOneBy(array('idEtudAssoc'=>$request->get('idetud'),'idMatAssoc'=>$request->get('idmat')));
    $nb=$assoc->getNote();
    $assoc->setNote($nb+1);
    $em->flush();
  }
  return new Response($c->getStatut());
    }
 
}

public function getpointAction(Request $request)
{
   $idet=$request->get('idetud');
   $idmat=$request->get('idmat');
   $nbq = $request->get('nbq');
   $em=$this->getDoctrine()->getEntityManager();
   $rep=$em->getRepository('EtudiantEtudiantBundle:EtudiantMatiere');
   $assoc=$rep->findOneBy(array('idEtudAssoc'=>$idet,'idMatAssoc'=>$idmat));
   $note=$assoc->getNote();
   $moy = $nbq/2;
   $final=($note * 20 )/$nbq;
   $assoc->setNote($final);
   $em->flush();
   if ($note > $moy)
   {
$ch="<div class='alert-box success'><span>SUCCESS:  You got ".$note." good answers from ".$nbq." </span></div></br><div class='alert-box notice'><span>NOTICE: Your average is : ".$final."</span></div>";
   }
   else if ($note < $moy)
   {
 $ch="<div class='alert-box error'><span>ERROR: You got ".$note." good answers from ".$nbq." </span></div></br><div class='alert-box notice'><span>NOTICE: Your average is : ".$final."</span></div>";
   }
   else
   {
$ch="<div class='alert-box warning'><span>MEDIUM:  You got ".$note." good answers from ".$nbq." </span></div></br><div class='alert-box notice'><span>NOTICE: Your average is : ".$final."</span></div>";

   }
   return new Response($ch);

}

//random questions
public function randomAction()
{
  $session= new Session();
        if (! $session)
        {
            return $this->render('EtudiantEtudiantBundle:etudiant:connect.html.twig',array('msg'=>'No session','code'=>'2'));
        }
        else
        {
          $session->set('qcm',0);
          $session->set('nb',0);
            $login = $session->get('login');
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('EtudiantEtudiantBundle:Etudiant');
            $me=$repository->findOneBy(array('login'=>$login));
  $em = $this->getDoctrine()->getEntityManager();
 $highest_id = $em->createQueryBuilder()
    ->select('MAX(q.idQuest)')
    ->from('EtudiantEtudiantBundle:Question', 'q')
    ->getQuery()
    ->getSingleScalarResult();
    $numbers = range(1, $highest_id);
    shuffle($numbers);
    $tab= array_slice($numbers, 0, 10);
    $questions=array();
    $matieres=array();
    $QuestRep=array();
    $choices=array();
    $rep=$em->getRepository('EtudiantEtudiantBundle:Question');
    $r=$em->getRepository('EtudiantEtudiantBundle:Qcm');
    $repository=$em->getRepository('EtudiantEtudiantBundle:Matiere');
    $rr=$em->getRepository('EtudiantEtudiantBundle:Choix');
    for($i=0;$i<10;$i++)
    {
      $quest=$rep->findOneBy(array('idQuest'=>$tab[$i]));
      $questions[$tab[$i]]=$quest;
      $qcmmat=$r->findOneBy(array('idQcm'=>$quest->getIdQcmQuest()));
      $mat=$repository->findOneBy(array('idMat'=>$qcmmat->getIdMatQcm()));
      $matieres[$tab[$i]]=$mat;
       $query = $em->createQuery(
                'SELECT qc FROM EtudiantEtudiantBundle:QuestionChoix qc WHERE qc.idQuestAssoc = :var'
  )->setParameter('var', $tab[$i]);
  $choix = $query->getResult();
  $QuestRep[$tab[$i]]=$choix;
  foreach ($choix as $value) {
    $cc=$rr->findOneBy(array('idChoix'=>$value->getIdChoixAssoc()));
    $choices[$cc->getIdChoix()]=$cc;
  }

    }

return $this->render('EtudiantEtudiantBundle:etudiant:randomlist.html.twig',array('id'=>'qcm','questions'=>$questions,'matieres'=>$matieres,'QuestRep'=>$QuestRep,'choices'=>$choices,'idetud'=>$me->getIdEtud()));
}
}


//tester la validité d'un reponse à une question
public function testanswerAction(Request $request)
{
  $session= new Session();
  if (! $session)
  {
    return $this->render('EtudiantEtudiantBundle:etudiant:connect.html.twig',array('msg'=>'No session','code'=>'2'));
  }
  else
  {
    $st = $request->get('statut');
  if($st == 'true')
  {
    $n = $session->get('qcm');
    $session->set('qcm',$n+1);
    $nn=$session->get('nb');
    $session->set('nb',$nn+1);
  return new Response('true');
  }
  else
  {
    return new Response('false');
  }
  
  }
  
}


//retourne le score du qcm 'randomly'
public function getScoreAction()
{
  $session = new Session();
  if (! $session)
  {
return $this->render('EtudiantEtudiantBundle:etudiant:connect.html.twig',array('msg'=>'No session','code'=>'2'));
  }
  else
  {
    $note = $session->get('qcm');
    $m = $note * 2;
      if ($note > 5)
   {
$ch="<div class='alert-box success'><span>SUCCESS:  You got ".$note." good answers from 10 </span></div>";
   }
   else if ($note < 5)
   {
 $ch="<div class='alert-box error'><span>ERROR: You got ".$note." good answers from 10 </span></div>";
   }
   else
   {
$ch="<div class='alert-box warning'><span>MEDIUM:  You got ".$note." good answers from 10 </span></div>";

   }
   return new Response($ch);
  }

}

//retourner un pdf
public function getCertifAction()
{
  $pdf = new FPDF();
//$pdf->AddPage();
//$pdf->SetFont('Arial','B',16);
//$pdf->Cell(40,10,'Hello World!');
$ch = $pdf->Output();
  //return $this->render('EtudiantEtudiantBundle:etudiant:getcertif.html.twig',array('id'=>'certif'));
return new Response($ch);
}


//retourner liste des messages
public function getMessagesAction()
{
  $session=new Session();
  if (! $session)
  {
    return $this->render('EtudiantEtudiantBundle:etudiant:connect.html.twig',array('msg'=>'No session','code'=>'2'));
  }
  else
  {
     $em=$this->getDoctrine()->getEntityManager();
 $repository=$em->getRepository('EtudiantEtudiantBundle:Etudiant');
 $me=$repository->findOneBy(array('login'=>$session->get('login')));
 $query = $em->createQuery(
                'SELECT m FROM EtudiantEtudiantBundle:Message m WHERE m.idRecep = :var'
  )->setParameter('var', $me->getIdEtud());
  $msgs = $query->getResult();
  $sender=array();
  return $this->render('EtudiantEtudiantBundle:etudiant:listMsgs.html.twig',array('id'=>'msg','messages'=>$msgs));
  }
}

//mise à jour de la date de lecture d'un message
public function updateMsgAction(Request $request)
{
  $id=$request->get('id');
  $em=$this->getDoctrine()->getEntityManager();
  $rep=$em->getRepository('EtudiantEtudiantBundle:Message');
  $msg = $rep->findOneBy(array('idMsg'=>$id));
  if (! $msg->getDatelectureMsg())
{
  $date = new \DateTime("now");
  $msg->setDatelectureMsg($date);
  $em->flush();
  return new Response(1);
}
return new Response(0);
}

//recuperer le formulaire d'envoi de messge
public function getFormSendAction()
{
  return $this->render('EtudiantEtudiantBundle:etudiant:sendMsg.html.twig',array('id'=>'msg','msg'=>'0'));
}

//Envoyer le message
public function SendMsgAction(Request $request)
{
  $session=new Session();
  if (! $session)
  {
     return $this->render('EtudiantEtudiantBundle:etudiant:connect.html.twig',array('msg'=>'No session','code'=>'2'));
  }
  else
  {
    $login = $session->get('login');
    $titre=$request->get('titre');
    $contenu =$request->get('contenu');
    $date= new \DateTime("now");
    $em=$this->getDoctrine()->getEntityManager();
    $repository=$em->getRepository('EtudiantEtudiantBundle:Etudiant');
    $me=$repository->findOneBy(array('login'=>$login));
    $msg=new Message();
    $msg->setIdEmet($me->getIdEtud());
    $msg->setIdRecep(0);
    $msg->setTitreMsg($titre);
    $msg->setContenuMsg($contenu);
    $msg->setDateenvoiMsg($date);
    $em->persist($msg);
    $em->flush();
      return $this->render('EtudiantEtudiantBundle:etudiant:sendMsg.html.twig',array('id'=>'msg','msg'=>'1'));
  }
}

//recuperer le formulaire de gestion de profil
public function SetProfileAction()
{
  $session=new Session();
  if (! $session)
  {
     return $this->render('EtudiantEtudiantBundle:etudiant:connect.html.twig',array('msg'=>'No session','code'=>'2'));
  }
  else
  {
    $login = $session->get('login');
    $em=$this->getDoctrine()->getEntityManager();
    $repository=$em->getRepository('EtudiantEtudiantBundle:Etudiant');
    $me=$repository->findOneBy(array('login'=>$login));
    return $this->render('EtudiantEtudiantBundle:etudiant:setProfile.html.twig',array('id'=>'setting','me'=>$me,'msg'=>'0'));
  }
  
}

//initialiser le profil 
public function upDateProfileAction(Request $request)
{
  $session=new Session();
   if (! $session)
  {
     return $this->render('EtudiantEtudiantBundle:etudiant:connect.html.twig',array('msg'=>'No session','code'=>'2'));
  }
  else
  {
    $em=$this->getDoctrine()->getEntityManager();
    $repository=$em->getRepository('EtudiantEtudiantBundle:Etudiant');
    $user = $repository->findOneBy(array('login'=>$session->get('login')));
    $login=$request->get('login');
    $pass=$request->get('pass1');
    $nom=$request->get('nom');
    $prenom=$request->get('prenom');
    $email=$request->get('email');
    $test = 0 ;
    if ($login != "")
    {
      $user->setLogin($login);
      $session->set('login',$login);
      $test = 1 ;
    }
    if ($pass != "")
    {
      $user->setPassword($pass);
      $test = 1 ;
    }
    if ($nom != "")
    {
      $user->setNomEtud($nom);
      $test = 1 ;
    }
    if ($prenom != "")
    {
      $user->setPrenomEtud($prenom);
      $test = 1 ;
    }
    if ($email != "")
    {
      $user->setMailEtud($email);
      $test = 1 ;
    }
    $em->flush();
    return $this->render('EtudiantEtudiantBundle:etudiant:setProfile.html.twig',array('id'=>'setting','me'=>$user,'msg'=>'1'));
  }
}

}