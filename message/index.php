<?php
include('inquiry-header.php');
error_reporting(0);
	if(isset($_POST['submit'])){
		 $company=$_POST['company'];
		 $name=$_POST['name'];
		 $furigana=$_POST['furigana'];
		 $email=$_POST['mail_address'];
		 $phone_number=$_POST['phone_number'];
		 $content_of_inquiry=$_POST['content_of_inquiry'];
	
		
		 
		
	
		 $to='azhar.womenindigital@gmail.com'; // Receiver Email ID, Replace with your email ID
		
		 $subject='コーポレートサイトの問い合わせ';
		 $message=
		"Name :".$name."\n".
		"Phone :".$phone_number."\n".
		"Email : ".$email."\n".
		"furigana : ".$furigana."\n".
		"company : ".$company."\n".
		"Department : ".$content_of_inquiry."\n";

		$headers="From: ".$email;

       $autoreplay = "お問い合わせありがとうございました。
早急にご返信致しますので今しばらくお待ちください。

■―――――――――――――――――――――■
株式会社F1　http://f1co.jp/
▼住所：〒110-0015 東京都台東区東上野2-13-8 アルカディア上野ビル8階
▼TEL：03-5246-4710
▼email：info@f1co.jp
■―――――――――――――――――――――■";


		if(mail($to, $subject, $message, $headers)){
		mail($email, $subject="Corporate Site Inquiry", $autoreplay, $headers)
			
				
		
?>
<style>

.inquery-heading p {
    font-size: 15px;
    text-align: left;
    padding: 30px 18px 60px 34px;
}
.inquery-heading {
    text-align: left;
    border: 4px solid #01A3AE;
}
.inquiry-section {
    padding: 85px 120px 80px 120px;
}
.inquiry-form {
    padding: 90px 111px;
}
.thnakyou-text{
   margin-right: 11px;
    font-size: 16px;
    text-align: left;
    margin-top: 21px;
    color: #000;
    line-height: 35px;
    font-family: 'M PLUS Rounded 1c', sans-serif;
}
@media only screen and (max-width:766px) {
   .inquiry-form {
    padding: 90px 15px;
}
.inquery-heading p{
font-family: 'M PLUS Rounded 1c', sans-serif;
}
.inquery-heading h1 {
    font-size: 25px;
    /* margin: 60px 0px; */
}
}
</style>
<section class="inquiry-section" style="padding-top: 200px;height: 50%;">
	<div class="inquiry-form">
		<div class="inquery-heading" style="text-align:left;">
			<h2 style="background: #01A3AE;padding: 30px;color: #fff;">Corporate Site Inquiry</h2>
			<p class="thnakyou-text"> 

送信いただいた内容を確認の上、ご連絡させていただきます。 <br>
お待たせして大変恐縮ではございますが、少々おまちください。

  </p>
		</div>
		

	</div>
</section>
<?php

}
		else{
			echo "Something went wrong!";
		}
	}

include('inquiry-footer.php');
?>