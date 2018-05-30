
<?php 
    $company = trim(urldecode(htmlspecialchars($_POST['company'])));
    $region = trim(urldecode(htmlspecialchars($_POST['region'])));
    $address = trim(urldecode(htmlspecialchars($_POST['address'])));
    $name = trim(urldecode(htmlspecialchars($_POST['name'])));
    $telephone = trim(urldecode(htmlspecialchars($_POST['telephone'])));
    $site = trim(urldecode(htmlspecialchars($_POST['site'])));
    $emploees = trim(urldecode(htmlspecialchars($_POST['emploees'])));
    $distributor = trim(urldecode(htmlspecialchars($_POST['distributor'])));
    $exporter = trim(urldecode(htmlspecialchars($_POST['exporter'])));
    $wholesale = trim(urldecode(htmlspecialchars($_POST['wholesale'])));
    $retailer = trim(urldecode(htmlspecialchars($_POST['retailer'])));
    $chain = trim(urldecode(htmlspecialchars($_POST['chain'])));
    $etailer = trim(urldecode(htmlspecialchars($_POST['etailer'])));
    $office = trim(urldecode(htmlspecialchars($_POST['office'])));
    $service = trim(urldecode(htmlspecialchars($_POST['service'])));
    $other = trim(urldecode(htmlspecialchars($_POST['other'])));
    $offices = trim(urldecode(htmlspecialchars($_POST['offices'])));
    $engineering = trim(urldecode(htmlspecialchars($_POST['engineering'])));
    $it = trim(urldecode(htmlspecialchars($_POST['it'])));
    $sales = trim(urldecode(htmlspecialchars($_POST['sales'])));
    $otherDifferent = trim(urldecode(htmlspecialchars($_POST['otherDifferent'])));
    $speakersys = trim(urldecode(htmlspecialchars($_POST['speakersys'])));
    $cables = trim(urldecode(htmlspecialchars($_POST['cables'])));
    $micro = trim(urldecode(htmlspecialchars($_POST['micro'])));
    $headphones = trim(urldecode(htmlspecialchars($_POST['headphones'])));
    $supplies = trim(urldecode(htmlspecialchars($_POST['supplies'])));
    $gaming = trim(urldecode(htmlspecialchars($_POST['gaming'])));
    $surge = trim(urldecode(htmlspecialchars($_POST['surge'])));
    $Keyboards = trim(urldecode(htmlspecialchars($_POST['Keyboards'])));
    $all = trim(urldecode(htmlspecialchars($_POST['all'])));
    $cameras = trim(urldecode(htmlspecialchars($_POST['cameras'])));
    $europe = trim(urldecode(htmlspecialchars($_POST['europe'])));
    $chine = trim(urldecode(htmlspecialchars($_POST['chine'])));
    $dubai = trim(urldecode(htmlspecialchars($_POST['dubai'])));
    $domestic = trim(urldecode(htmlspecialchars($_POST['domestic'])));
    $contacts = trim(urldecode(htmlspecialchars($_POST['contacts'])));

    $mail_to = "you@yourdomain.com";
    $mail_subject = "Your email subject line";
    $headers = '';

    $mail_message = '';
    $mail_message .= "Company: ".clean_string($company)."\n";
    $mail_message .= "Region: ".clean_string($region)."\n";
    $mail_message .= "address: ".clean_string($address)."\n";
    $mail_message .= "name: ".clean_string($name)."\n";
    $mail_message .= "telephone: ".clean_string($telephone)."\n";
    $mail_message .= "site: ".clean_string($site)."\n";
    $mail_message .= "emploees: ".clean_string($emploees)."\n";
    $mail_message .= "distributor: ".clean_string($distributor)."\n";
    $mail_message .= "exporter: ".clean_string($exporter)."\n";
    $mail_message .= "wholesale: ".clean_string($wholesale)."\n";
    $mail_message .= "retailer: ".clean_string($retailer)."\n";
    $mail_message .= "etailer: ".clean_string($etailer)."\n";
    $mail_message .= "office: ".clean_string($office)."\n";
    $mail_message .= "service: ".clean_string($service)."\n";
    $mail_message .= "other: ".clean_string($other)."\n";
    $mail_message .= "offices: ".clean_string($offices)."\n";
    $mail_message .= "engineering: ".clean_string($engineering)."\n";
    $mail_message .= "it: ".clean_string($it)."\n";
    $mail_message .= "sales: ".clean_string($sales)."\n";
    $mail_message .= "otherDifferent: ".clean_string($otherDifferent)."\n";
    $mail_message .= "speakersys: ".clean_string($speakersys)."\n";
    $mail_message .= "cables: ".clean_string($cables)."\n";
    $mail_message .= "micro: ".clean_string($micro)."\n";
    $mail_message .= "headphones: ".clean_string($headphones)."\n";
    $mail_message .= "supplies: ".clean_string($supplies)."\n";
    $mail_message .= "gaming: ".clean_string($gaming)."\n";
    $mail_message .= "surge: ".clean_string($surge)."\n";
    $mail_message .= "Keyboards: ".clean_string($Keyboards)."\n";
    $mail_message .= "all: ".clean_string($all)."\n";
    $mail_message .= "cameras: ".clean_string($cameras)."\n";
    $mail_message .= "europe: ".clean_string($europe)."\n";
    $mail_message .= "chine: ".clean_string($chine)."\n";
    $mail_message .= "dubai: ".clean_string($dubai)."\n";
    $mail_message .= "domestic: ".clean_string($domestic)."\n";
    $mail_message .= "contacts: ".clean_string($contacts)."\n";

    

    mail($mail_to, $mail_subject, $mail_message, $headers);  
    // $file = fopen("file.txt", "a");
    // foreach ($_POST as $key => $value) {
    //     if (empty($value)) {
    //         fwrite($file,$key . " => checked\r\n");

    //     } else {
    //         fwrite($file,$key . " => " . $value . "\r\n");
    //     }
    // }
    // print_r($_POST);
    // fclose($file);


?>