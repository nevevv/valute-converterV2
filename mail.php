<?php

/* users__money my__money username user__phone user__mail */
$userName = $_POST['username']
$usersMoney = $_POST['users__money']
$myMoney = $_POST['my__money']
$userPhone = $_POST['user__phone']
$userMail = $_POST['user__mail']

$mail->isSMTP();
$mail->Host = 'smtp.mail.ru';
$mail->SMTPAuth = true;
$mail->Username = 'umarovdavid2018@mail.ru';
$mail->Password = 'nexia633';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('umarovdavid2018@mail.ru');
$mail->addAddress('ashurova.2005@mail.ru')

$mail->isHTML(true)


$mail->Subject = 'Заявка с сайта';
$mail->Body = `$username /n $usersMoney /n $myMoney /n $userPhone /n $userMail`;
$mail->AltBody = '';