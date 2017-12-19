<?
$connection=mysql_connect("localhost","appceftr_login","1q2w3e4R") or die("เชื่อมต่อฐานข้อมูลไม่ได้");
mysql_select_db("appceftr_login") or die("ไม่สามารถเลือกฐานข้อมูลได้");
mysql_query("set character set utf8");
$q="SELECT * FROM abstract";
$qr=mysql_query($q);
$row_num=mysql_num_rows($qr);

$col_arr=array("id","title","Firstname","Familyname","Department","Institute","Address","City / District","province","Zipcode","Country","Tel","Mobile","Fax","Email","Frmemail2","Abstractcategory","Abstracttitle","Presentation","Oralpresentation","Frmab_presenting_1","Author_1","Institution_1","Email_1","Presenting_2","Author_2","Institution_2","Email_2","Presenting_3","Author_3","Institution_3","Email_3","Presenting_4","Author_4","Institution_4","Email_4","Presenting_5","Author_5","Institution_5","Email_5","Presenting_6","Author_6","Institution_6","Email_6","Presenting_7","Author_7","Institution_7","Email_7","Presenting_8","Author_8","Institution_8","Email_8","Presenting_9","Author_9","Institution_9","Email_9","Presenting_10","Author_10","Institution_10","Email_10","Background","Objectives","Materialsmethods","Results","Conclusions","FileAbstract");
$col_num=count($col_arr);
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");;
header("Content-Disposition: attachment;filename=data.xls "); 
?>
<?php echo '<?xml version="1.0" encoding="utf-8"?>'

; ?>
 
<?php echo'<?mso-application progid="Excel.Sheet"?>';?>
 
<Workbook xmlns="urn:schemas-microsoft-com:office:spreadsheet"
 xmlns:o="urn:schemas-microsoft-com:office:office"
 xmlns:x="urn:schemas-microsoft-com:office:excel"
 xmlns:ss="urn:schemas-microsoft-com:office:spreadsheet"
 xmlns:html="http://www.w3.org/TR/REC-html40">
 <Styles>
  <Style ss:ID="Default" ss:Name="Normal">
   <Alignment ss:Vertical="Bottom"/>
   <Borders/>
   <Font x:CharSet="222"/>
   <Interior/>
   <NumberFormat/>
   <Protection/>
  </Style>
 </Styles>
 <Worksheet ss:Name="ABSTRACT_APPC">
  <Table ss:ExpandedColumnCount="<?=$col_num?>" ss:ExpandedRowCount="<?=$row_num+1?>" x:FullColumns="1"
   x:FullRows="1">
   <Row>
   <?php foreach($col_arr as $key=>$value){ ?>
    <Cell><Data ss:Type="String"><?=$value?></Data></Cell>
    <?php } ?>    
   </Row>
<?php
while($rs=mysql_fetch_array($qr)){
?>   
   <Row>
         <Cell><Data ss:Type="String"><?=$rs['id']?></Data></Cell>
    <Cell><Data ss:Type="String"><?=$rs['title']?></Data></Cell>
    <Cell><Data ss:Type="String"><?=$rs['frmcontact_firstname']?></Data></Cell>
    <Cell><Data ss:Type="String"><?=$rs['frmcontact_familyname']?></Data></Cell>
    <Cell><Data ss:Type="String"><?=$rs['frmcontact_department']?></Data></Cell>  
    <Cell><Data ss:Type="String"><?=$rs['frmcontact_institute']?></Data></Cell>  
    <Cell><Data ss:Type="String"><?=$rs['frmcontact_addr']?></Data></Cell>  
    <Cell><Data ss:Type="String"><?=$rs['frmcontact_amphur']?></Data></Cell>  
    <Cell><Data ss:Type="String"><?=$rs['frmcontact_province']?></Data></Cell>  
    <Cell><Data ss:Type="String"><?=$rs['frmcontact_zipcode']?></Data></Cell>  
    <Cell><Data ss:Type="String"><?=$rs['country']?></Data></Cell>  
    <Cell><Data ss:Type="String"><?=$rs['frmoffice_tel']?></Data></Cell>  
    <Cell><Data ss:Type="String"><?=$rs['frmmobile']?></Data></Cell>  
    <Cell><Data ss:Type="String"><?=$rs['frmfax']?></Data></Cell>  
    <Cell><Data ss:Type="String"><?=$rs['email']?></Data></Cell>  
    <Cell><Data ss:Type="String"><?=$rs['frmemail2']?></Data></Cell>  
    <Cell><Data ss:Type="String"><?=$rs['abstractcategory']?></Data></Cell>  
    <Cell><Data ss:Type="String"><?=$rs['abstracttitle']?></Data></Cell>  
    <Cell><Data ss:Type="String"><?=$rs['presentation']?></Data></Cell>  
    <Cell><Data ss:Type="String"><?=$rs['oralpresentation']?></Data></Cell>  
    <Cell><Data ss:Type="String"><?=$rs['frmab_presenting_1']?></Data></Cell>  
    <Cell><Data ss:Type="String"><?=$rs['frmab_author_1']?></Data></Cell>  
    <Cell><Data ss:Type="String"><?=$rs['frmab_institution_1']?></Data></Cell>
     <Cell><Data ss:Type="String"><?=$rs['frmab_email_1']?></Data></Cell>  
    <Cell><Data ss:Type="String"><?=$rs['frmab_presenting_2']?></Data></Cell> 
    <Cell><Data ss:Type="String"><?=$rs['frmab_author_2']?></Data></Cell>  
      <Cell><Data ss:Type="String"><?=$rs['frmab_institution_2']?></Data></Cell>  
        <Cell><Data ss:Type="String"><?=$rs['frmab_email_2']?></Data></Cell>  
          <Cell><Data ss:Type="String"><?=$rs['frmab_presenting_3']?></Data></Cell>  
            <Cell><Data ss:Type="String"><?=$rs['frmab_author_3']?></Data></Cell>  
              <Cell><Data ss:Type="String"><?=$rs['frmab_institution_3']?></Data></Cell>  
                <Cell><Data ss:Type="String"><?=$rs['frmab_email_3']?></Data></Cell>  
                  <Cell><Data ss:Type="String"><?=$rs['frmab_presenting_4']?></Data></Cell>  
                    <Cell><Data ss:Type="String"><?=$rs['frmab_author_4']?></Data></Cell>  
                      <Cell><Data ss:Type="String"><?=$rs['	frmab_institution_4']?></Data></Cell>  
                        <Cell><Data ss:Type="String"><?=$rs['frmab_email_4']?></Data></Cell>  
                          <Cell><Data ss:Type="String"><?=$rs['frmab_presenting_5']?></Data></Cell>  
                            <Cell><Data ss:Type="String"><?=$rs['frmab_author_5']?></Data></Cell>  
                              <Cell><Data ss:Type="String"><?=$rs['frmab_institution_5']?></Data></Cell>  
                                <Cell><Data ss:Type="String"><?=$rs['frmab_email_5']?></Data></Cell>  
        <Cell><Data ss:Type="String"><?=$rs['frmab_presenting_6']?></Data></Cell>  
        <Cell><Data ss:Type="String"><?=$rs['frmab_author_6']?></Data></Cell>  
        <Cell><Data ss:Type="String"><?=$rs['frmab_institution_6']?></Data></Cell>  
        <Cell><Data ss:Type="String"><?=$rs['frmab_email_6']?></Data></Cell>  
        <Cell><Data ss:Type="String"><?=$rs['frmab_presenting_7']?></Data></Cell>  
        <Cell><Data ss:Type="String"><?=$rs['frmab_author_7']?></Data></Cell>  
        <Cell><Data ss:Type="String"><?=$rs['frmab_institution_7']?></Data></Cell>  
        <Cell><Data ss:Type="String"><?=$rs['frmab_email_7']?></Data></Cell>  
        <Cell><Data ss:Type="String"><?=$rs['frmab_presenting_8']?></Data></Cell>  
        <Cell><Data ss:Type="String"><?=$rs['frmab_author_8']?></Data></Cell>  
        <Cell><Data ss:Type="String"><?=$rs['frmab_institution_8']?></Data></Cell>  
        <Cell><Data ss:Type="String"><?=$rs['frmab_email_8']?></Data></Cell>  
        <Cell><Data ss:Type="String"><?=$rs['frmab_presenting_9']?></Data></Cell>  
        <Cell><Data ss:Type="String"><?=$rs['frmab_author_9']?></Data></Cell>  
        <Cell><Data ss:Type="String"><?=$rs['frmab_institution_9']?></Data></Cell>  
        <Cell><Data ss:Type="String"><?=$rs['frmab_email_9']?></Data></Cell>  
        <Cell><Data ss:Type="String"><?=$rs['frmab_presenting_10']?></Data></Cell>  
        <Cell><Data ss:Type="String"><?=$rs['frmab_author_10']?></Data></Cell>  
        <Cell><Data ss:Type="String"><?=$rs['frmab_institution_10']?></Data></Cell>  
        <Cell><Data ss:Type="String"><?=$rs['frmab_email_10']?></Data></Cell>  
        <Cell><Data ss:Type="String"><?=$rs['frmab_background']?></Data></Cell>  
        <Cell><Data ss:Type="String"><?=$rs['frmab_objectives']?></Data></Cell>  
        <Cell><Data ss:Type="String"><?=$rs['frmab_materialsmethods']?></Data></Cell>  
        <Cell><Data ss:Type="String"><?=$rs['frmab_results']?></Data></Cell>  
         <Cell><Data ss:Type="String"><?=$rs['frmab_conclusions']?></Data></Cell>  
          <Cell><Data ss:Type="String"><?=$rs['image']?></Data></Cell> 
         	
   </Row>
<?php  }  ?>     
  </Table>
  <WorksheetOptions xmlns="urn:schemas-microsoft-com:office:excel">
   <Selected/>
   <ProtectObjects>False</ProtectObjects>
   <ProtectScenarios>False</ProtectScenarios>
  </WorksheetOptions>
 </Worksheet>
</Workbook>