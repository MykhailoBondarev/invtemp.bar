<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Creating Invite E-ticket</title>
</head>
<body>
</style>
<style media="all">
    @font-face { font-family: 'MyriadProRegular'; src: url("https://dy6ww9hr4xrdk.cloudfront.net/img/eticket/256591282/MyriadPro-Regular.otf.eot"); src: local("☺"), url("https://dy6ww9hr4xrdk.cloudfront.net/img/eticket/256591282/MyriadPro-Regular.otf.woff") format("woff"), url("https://dy6ww9hr4xrdk.cloudfront.net/img/eticket/256591282/MyriadPro-Regular.otf.ttf") format("truetype"), url("https://dy6ww9hr4xrdk.cloudfront.net/img/eticket/256591282/MyriadPro-Regular.otf.svg") format("svg"); }
    @font-face { font-family: 'MyriadProBold'; src: url("https://dy6ww9hr4xrdk.cloudfront.net/img/eticket/256591282/MyriadPro-Bold.otf.eot"); src: local("☺"), url("https://dy6ww9hr4xrdk.cloudfront.net/img/eticket/256591282/MyriadPro-Bold.otf.woff") format("woff"), url("https://dy6ww9hr4xrdk.cloudfront.net/img/eticket/256591282/MyriadPro-Bold.otf.ttf") format("truetype"), url("https://dy6ww9hr4xrdk.cloudfront.net/img/eticket/256591282/MyriadPro-Bold.otf.svg") format("svg"); }
    @font-face { font-family: 'MyriadProSemibold'; src: url('https://dy6ww9hr4xrdk.cloudfront.net/img/eticket/256591282/myriadpro-semibold.eot'); src: local("☺"), url('https://dy6ww9hr4xrdk.cloudfront.net/img/eticket/256591282/myriadpro-semibold.eot') format('embedded-opentype'), url('https://dy6ww9hr4xrdk.cloudfront.net/img/eticket/256591282/myriadpro-semibold.woff') format('woff'), url('https://dy6ww9hr4xrdk.cloudfront.net/img/eticket/256591282/myriadpro-semibold.ttf') format('truetype'), url('https://dy6ww9hr4xrdk.cloudfront.net/img/eticket/256591282/myriadpro-semibold.svg#MyriadProSemibold') format('svg'); }
    @font-face { font-family: 'MyriadProBoldCondensed'; src: url('https://dy6ww9hr4xrdk.cloudfront.net/img/eticket/256591282/myriadpro_pro_bold_condensed-webfont.eot'); src: url('https://dy6ww9hr4xrdk.cloudfront.net/img/eticket/256591282/myriadpro_pro_bold_condensed-webfont.eot') format('embedded-opentype'), url('https://dy6ww9hr4xrdk.cloudfront.net/img/eticket/256591282/myriadpro_pro_bold_condensed-webfont.woff') format('woff'), url('https://dy6ww9hr4xrdk.cloudfront.net/img/eticket/256591282/myriadpro_pro_bold_condensed-webfont.ttf') format('truetype'), url('https://dy6ww9hr4xrdk.cloudfront.net/img/eticket/256591282/myriadpro_pro_bold_condensed-webfont.svg#MyriadProSemibold') format('svg'); }
    .mainTicket 
    { 
        max-width: 900px; 
        padding: 50px 0 0 0; 
        margin: 50px auto; 
        font: 20px 'MyriadProRegular'; 
        font-size: 100%; 
    }

    div { overflow: hidden; }
    div.head { width: 100%; border-bottom: 1px solid black; padding-bottom: 10px; margin-bottom: 10px; }
    div.logo { width: 45%; float: left; }
    div.bottomlogo { width: 25%; float: left; }
    img.logoimg { max-height: 60px; }
    div.bottomlogo img.logoimg {width: 100%; max-height: none; }
    div.main_h { text-align: right; text-transform: uppercase; font-size: 12pt; padding-top: 7px; }
    div.main_h span { display: inline; }
    div.hid { font-family: 'MyriadProRegular'; text-align: right; font-size: 10pt; }
    div.Holder { float: right; width: 45%; }
    div.activity_name { font-size: 30px; padding-bottom: 15px; }
    div.info { margin-bottom: 10px; }
    .left { float: left; }
    .right { float: right; }
    div.rules { width: 50%; }
    div.place, .place_location { font-size: 18px; padding-bottom: 0px; }
    .place_location > div { margin-right: 40px; }
    div.place { padding-bottom: 5px; }
    div.place_address, .place_price, .place_owner, .place_passport { font-size: 22px; padding-bottom: 3px; }
    div.control { font-size: 16px; }
    ul { padding-left: 20px; margin-bottom: 5px; }
    li { list-style-type: decimal; font-size: 16px; padding-bottom: 15px; }
    .forbidden_img { width: 100%; }
    div.h_bold { font-size: 17px; font-weight: bold; }
    div.impor { font-size: 18px; float: left; width: 100%; margin-top: 0px; margin-bottom: 5px; }
    div.happyy { text-transform: uppercase; padding-left: 20px; font-size: 16px; }
    div.forbidden_h { font-size: 20px;  text-align: center; }
    div.forbidden_inf { font-size: 9.4px; color: #3c3b3b; text-align: center; border-bottom: 4px dotted #4e4d4d; padding-bottom: 10px; margin-bottom: 5px; margin-top: 0px; letter-spacing: 0; width: 100%; }
    div.bonus[bonus="0"]{display:none;}
    

    .bottom_inf > div { float: left; }

    .bottom_inf div.control { width: 35%; }
    .bottom_inf div.small_inf { width: 45%; }
    .bottom_inf div.tn { width: 20%; text-align: center; }
    div.small_inf div.activity_name { font-size: 17px; }
    div.small_inf div.place, div.small_inf .place_location { font-size: 12px; padding-bottom: 3px; }
    div.small_inf div.place_address, div.small_inf .place_price, div.small_inf .place_owner, div.small_inf .place_passport { font-size: 10px; padding-bottom: 0px; }
    div.small_inf .place_location { padding-top: 5px; padding-bottom: 5px; }
    div.small_inf div.activity_name { padding-bottom: 3px; }
    .tn > img { width: 80%; }
    div.phoneNo { color: #31063c; font-size: 25px; }
    div.to { font-size: 13px; color: #31063c; text-align: right; text-transform: uppercase; }
    div.tno { font-size: 12pt; }
    .image.right { width: 30%; text-align: right; }
    .information_holder.left { width: 40%; }
    .info .information_holder.left { position: relative; }
    .rules_holder, .forbidden, .bottom_inf, .footer { float: left; width: 100%; }
    .small_inf > .activity_name { height: auto; }
    
    .InviteTrue, .InviteFalse{
        display:none;
    }
    .InviteFalse{
        display:block;
    }
        
    
@media print {
.mainTicket {     
    zoom: 70%;
    max-width: 950px; margin: 0px; font: 20px 'MyriadProRegular'; font-size: 100%;
    padding: 0;
}}
div[affiliateId]{
display:none;
}
div[affiliateId="6202201"]{
display: table-cell;
}

div div[ExternalKey="rusdram"] {
     display: block;
}

div.Hide-External-Order
{
     display: none;
     font-size: 12px;
}

div.capitals{
    text-transform: uppercase;
    font-size: 12px;
}

</style>
<div class="mainTicket">
    <?php 
        $activity_name=$_POST['activity_name'];
        $event_date = date('d.m.Y /H:i/', strtotime($_POST['event_date']));  
        $event_city=$_POST['event_city'];     
        $event_address=$_POST['event_address'];
        $event_sector=$_POST['event_sector'];
        $event_row=$_POST['event_row'];;
        $event_place=$_POST['event_place'];        
        $barcode_text=$_POST['barcode_text'];   
        $event_img_file=$_FILES['uploadfile'];        

        if ($event_img_file['name']!='' || $event_img_file['size']!=0)
        {
            if ($event_img_file['type']=='image/jpeg' || $event_img_file['type']=='image/png')
            {    
                $uploaddir = './files/';
                $uploadfile = $uploaddir.$event_img_file['name'];  
                copy($_FILES['uploadfile']['tmp_name'], $uploadfile);
                $event_img_link=$uploadfile;    
            }
            else
            {
                echo 'Wrong image type!';
                exit;
            }
        }
        elseif ($_POST['event_img_link']!='')
        {
            $event_img_link=$_POST['event_img_link'];
        }
        else
        {
            if (!isset($activity_name))
            {
                $activity_name='Undefined event'; 
            } 
            if (!isset($event_address))
            {
                $event_address='Undefined address';
            }
            if (!isset($event_sector))
            {
                $event_sector='Undefined sector';  
            }
            if (!isset($event_city))
            {
                $event_city='Undefined city';  
            }
            if (!isset($event_img_link))
            {               
                $event_img_link='/pic/default_img.jpg';
            }
            if (!isset($event_row))
            {
                $event_row='';
            }
            if (!isset($event_place))
            {
                $event_place='';
            }                   
        }         
     ?>
    <div class="head">
        <div class="logo"><img src="/pic/karabas_logo.png" class="logoimg" /></div>
        <div class="right Holder">
            <div class="main_h">
            <span class="InviteBoolUA InviteFalse">Запрошення</span>
            <span class="InviteBoolUA InviteTrue">Квиток</span> 
            <span>/</span>
            <span class="InviteBoolEN InviteFalse">Invitation</span>
            <span class="InviteBoolEN InviteTrue">E-ticket</span></div>
           
        </div>
    </div>
    <div class="info">
        <div class="left information_holder">
            <div class="activity_name"><?php print_r($activity_name); ?></div>
            <div class="place" style="padding-bottom: 2px;"><?php echo $event_date.' '.$event_city;  ?></div>
            <div class="place"><?php echo $event_address ?></div>
            <div class="place_location"><table style="margin-left: -2px;"><tr><td>Сектор/Sector: <?php echo $event_sector; ?></td></tr>
                <tr>
                    <?php 
                        if ($event_row!='' || $event_place!='')
                        {
                            echo '<td>Ряд/Row: '.$event_row.'</td>';
                            echo '<td>Місце/Place: '.$event_place.'</td>';
                        }
                     ?>
                </tr>
            </table>
            </div>
            <div class="place_price" style="margin-top: 3px;">Запрошення не для продажу</div>
            <div class="bonus" bonus="0" > </div>   


            <div class="control">Контроль / Control<div style="padding-top:12px; ">  
                <iframe src="barcode_img.php?barcode_text=<?php echo $barcode_text; ?>" frameborder="0" style="height: 101px;"></iframe>
            </div>
            </div>    
        </div>
       <div class="image right" style="position: relative;height: 330px;"><img src="<?php echo $event_img_link; ?>" style="max-height: 330px; max-width: 250px;position: absolute;z-index:1;right: 0;" /></div>
    </div>
    <div class="rules_holder">
        <div class="rules left">
            <div class="h_bold">Правила:</div>
            <ul>
                <li>Цей електронний квиток надає право відвідування заходу.</li>
                <li>Електронний квиток заборонено копіювати та передавати копії третім особам. Унікальний ідентифікатор (штрих-код), який міститься на цьому електронному квитку, гарантує вам право на одноразове відвідування заходу. Пред’явлення третіми особами електронного квитка з ідентичним ідентификатором позбавляє вас права на відвідування заходу.</li>
                <li>У разі виникнення будь-яких проблем, таких як неможливість прочитати ідентифікатор (штрих-код), фізичне пошкодження цього електронного квитка або в інших випадках, необхідно звернутися в спеціалізований пункт обміну або в каси, перелік яких є на сайті karabas.com.</li>
                <li>Перевірка електронних квитків та прохід на захід здійснюється у відповідності з правилами, що встановлені організаторами або адміністраціей залу. Для проходження процедури ідентифікації електронного квитка та з метою перевірки права використання цього електронного квитка рекомендовано мати при собі документ, що підтверджує особу.</li>
                <li>Вартість цього електронного квитка може бути повернена лише у разі відміни, заміни або переноса заходу на умовах, встановлених офертой. Вартість сервісного або інших додаткових сборів, що взимається при продажу електронного квитка, поверненню не підлягає.</li>
                <li>З умовами оферти ви можете ознайомитися на сайті karabas.com. Ці правила не є офертою.</li>
            </ul>
        </div>
        <div class="rules right">
            <div class="h_bold">Rules:</div>
            <ul>
                <li>Your electronic ticket permits admission to the event.</li>
                <li>It is not permitted to copy the electronic tickets, or give a copy to third parties. A unique identifying code (bar-code) is printed on the electronic ticket, and guarantees your admission for one single entry to the event. If you pass your electronic ticket and unique identifying code to third parties, your own admission to the event will be forfeited.</li>
                <li>If you encounter any kind of difficulties - for example, your unique identifying code is unreadable, or your electronic ticket becomes physically damaged, or other similar incidents - you should contact one of the special ticket-return locations or ticket-desks indicated on our website at www.karabas.com.</li>
                <li>Checking your electronic ticket and admission to the event take place in accordance with the conditions laid down by the organisers or venue administration. While your electronic ticket is being scanned we recommend you keep an ID document to hand, and keep it while the validity of your ticket is confirmed.</li>
                <li>The price of your electronic ticket can be refunded only in case the event is cancelled, changed or postponed, according to the advertised conditions. The costs of service fees or other handling charges connected with the issue of your ticket cannot be refunded.</li>
                <li>You can read the full conditions of this offer on our site at www.karabas.com. The document you are reading does not constitute these conditions.</li>
            </ul>
        </div>
    </div>
    <div class="forbidden">
        <div class="forbidden_h capitals">Приємного відпочинку</div>
        <div class="forbidden_h">Категорично заборонено приносити на захід / Forbidden:</div>
        <img src="/pic/forbidden.png" alt="" class="forbidden_img" />
        <div class="forbidden_inf">Усі вище зазначені речі будуть вилучатися службою безпеки. Адміністрація залишає за собою право проводити особистий огляд відвідувачів з метою гарантування безпеки заходу.</div>
    </div>
    <div class="bottom_inf">
        <div class="control">Контроль / Control<br>
     <iframe src="barcode_img.php?barcode_text=<?php echo $barcode_text; ?>" frameborder="0" style="height: 101px;"></iframe>
           <div class="Hide-External-Order" ExternalKey="">
                <div class="text-to-left">Зовнішній ID: 0</div>
           </div>
       </div>
        <div class="small_inf">
            <div class="activity_name"><?php echo $activity_name; ?></div>
            <div class="place" style="padding-bottom: 0px;"><?php echo $event_date; ?></div>
            <div class="place"><?php $event_address; ?></div>
            <div class="place_location"><div class="">Сектор/Sector: <?php echo $event_sector; ?></div><div class="left">Ряд / Row: <?php echo $event_row; ?></div><div class="left">Місце / Place: <?php echo $event_place; ?></div></div>
            <div class="place_price InviteFalse" >Запрошення не для продажу</div>
        </div>
        <div class="tn">
            <img src="/pic/eticket_scanner.png" />
        </div>
    </div>
    <div class="footer">
        <div class="bottomlogo"><img class="logoimg" src="/pic/karabas_logo.png"/>
        </div>
        <div affiliateId="331812930" class="footerInf left"> <img src="/pic/karabas_logo.png" style="height: 30px;margin-left: 27px;margin-top: 18px;"-->
        </div>
        <div class="footerInf right">
            <div class="phoneNo"> 380 44 590 55 55</div>
            <div class="to">З а м о в л е н  н я  к в и т к і в</div>
        </div>
    </div>
</div>
</body>
</html>

