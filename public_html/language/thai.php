<?php
// $Id: thai.php,v 1.0 2004/09/08 13:56:23 pongkiat Exp $
/**
* Content code
* @ package Mambo Open Source
* @ Copyright (C) 2004 Pongkiat Chedpitaksakul
* @ All rights reserved
* @ Mambo Open Source is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
* @ version $Revision: 1.0 $
**/

defined( '_VALID_MOS' ) or die( 'คุณไม่ได้รับอนุญาตให้เข้าถึงแหล่งข้อมูลนี้โดยตรง' );

// common
DEFINE("_NOT_AUTH","คุณไม่ได้รับอนุญาตให้ดูข้อมูลนี้");
DEFINE("_DO_LOGIN","กรุณาลอกอิน");
DEFINE('_VALID_AZ09',"โปรดกรอก %s ที่ถูกต้อง  คือ ไม่มีช่องว่าง มีตัวอักษรมากกว่า %d ตัวและต้องประกอบด้วย 0-9,a-z,A-Z เท่านั้น");
DEFINE('_CMN_YES',"ใช่");
DEFINE('_CMN_NO',"ไม่ใช่");

DEFINE('_CMN_NAME',"ชื่อ");
DEFINE('_CMN_DESCRIPTION',"คำอธิบาย");
DEFINE('_CMN_SAVE',"บันทึก");
DEFINE('_CMN_CANCEL',"ยกเลิก");
DEFINE('_CMN_PRINT',"พิมพ์");
DEFINE('_CMN_PDF',"PDF");
DEFINE('_CMN_EMAIL',"ส่งอีเมล์");
DEFINE('_CMN_PARENT',"Parent"); // in the context of parent folder, parent menu item, etc
DEFINE('_CMN_ORDERING',"การจัดลำดับ");
DEFINE('_CMN_ACCESS',"ระดับการเข้าถึง");
DEFINE('_CMN_SELECT',"เลือก");

DEFINE('_CMN_NEXT',"ถัดไป");
DEFINE('_CMN_NEXT_ARROW',"&gt;&gt;");
DEFINE('_CMN_PREV',"ก่อนหน้า");
DEFINE('_CMN_PREV_ARROW',"&gt;&gt;");

DEFINE('_CMN_SORT_NONE',"ไม่มีการเรียง");
DEFINE('_CMN_SORT_ASC',"เรียงจากน้อยไปมาก");
DEFINE('_CMN_SORT_DESC',"เรียงจากมากไปน้อย");

DEFINE('_CMN_NEW',"ใหม่");
DEFINE('_CMN_NONE',"ไม่มี");
DEFINE('_CMN_LEFT',"ทางซ้าย");
DEFINE('_CMN_RIGHT',"ทางขวา");
DEFINE('_CMN_CENTER',"ตรงกลาง");

DEFINE('_CMN_PUBLISHED',"เผยแพร่");
DEFINE('_CMN_UNPUBLISHED',"ไม่เผยแพร่");

DEFINE('_CMN_FOLDER',"โฟลเดอร์");
DEFINE('_CMN_SUBFOLDER',"โฟลเดอร์ย่อย");
DEFINE('_CMN_OPTIONAL',"มีหรือไม่ก็ได้");
DEFINE('_CMN_REQUIRED',"ต้องมี");

DEFINE('_CMN_CONTINUE',"ต่อไป");

DEFINE('_CMN_NEW_ITEM',"ข่าวใหม่จะอยู่ในลำดับสุดท้ายเสมอ");
DEFINE('_LOGIN_INCOMPLETE','โปรดกรอกชื่อสมาชิกและรหัสผ่านให้ครบถ้วน');
DEFINE('_LOGIN_BLOCKED','ชื่อสมาชิกนี้ถูกห้ามใช้งาน โปรดติดต่อผู้ดูและระบบ');
DEFINE('_LOGIN_INCORRECT','ชื่อสมาชิกและรหัสผ่านไม่ถูกต้อง โปรดลองใหม่อีกครั้ง');
DEFINE('_LOGIN_NOADMINS','คุณไม่สามารถเข้าสู่ระบบได้ เนื่องจากไม่มีการเตรียมระบบไว้ให้');

//mambots
DEFINE('_TOC_JUMPTO',"ข้ามไปยัง");

//content
DEFINE('_READ_MORE','รายละเอียด...');
DEFINE('_READ_MORE_REGISTER','ลงทะเบียนเพื่ออ่านต่อ...');
DEFINE('_MORE','มีต่อ...');
DEFINE('_ON_NEW_CONTENT', "ข่าวใหม่ได้ถูกส่งโดย %s เรื่อง %s" );
DEFINE('_SEL_CATEGORY','เลือกหมวดหมู่');
DEFINE('_NOT_EXIST','ไม่มีเวบเพจที่คุณต้องการดู<br />โปรดเลือกเวบเพจจากเมนูหลัก');

//classes/html/modules.php
DEFINE('_BUTTON_VOTE','ลงคะแนน');
DEFINE('_BUTTON_RESULTS','ผลลัพธ์');
DEFINE('_USERNAME','ชื่อสมาชิก');
DEFINE('_LOST_PASSWORD','ลืมรหัสผ่าน');
DEFINE('_PASSWORD','รหัสผ่าน');
DEFINE('_BUTTON_LOGIN','เข้าสู่ระบบ');
DEFINE('_BUTTON_LOGOUT','ออกจากระบบ');
DEFINE('_NO_ACCOUNT','ยังไม่มีบัญชีสมาชิก?');
DEFINE('_CREATE_ACCOUNT','สร้างบัญชีสมาชิก');
DEFINE('_VOTE_POOR','แย่');
DEFINE('_VOTE_BEST','ดีที่สุด');
DEFINE('_USER_RATING','การประเมินจากสมาชิก');
DEFINE('_RATE_BUTTON','ประเมิน');

//contact.php
DEFINE('_ENQUIRY','การสอบถาม');
DEFINE('_ENQUIRY_TEXT','อีเมล์สอบถามนี้มาจาก');
DEFINE('_THANK_MESSAGE','ขอบคุณสำหรับอีเมล์ครับ');

// classes/html/contact.php
DEFINE('_CONTACT_TITLE','สถานที่ติดต่อ');
DEFINE('_NAME_PROMPT',' ชื่อของคุณ:');
DEFINE('_EMAIL_PROMPT','อีเมล์ของคุณ:');
DEFINE('_MESSAGE_PROMPT','ข้อความ:');
DEFINE('_SEND_BUTTON','ส่ง');
DEFINE('_CONTACT_FORM_NC','โปรดตรวจสอบให้แน่ใจว่าได้กรอกข้อมูลครบถ้วนและถูกต้อง');
DEFINE('_TELEPHONE','โทรศัพท์: ');
DEFINE('_FAX','แฟกซ์: ');
DEFINE('_CONTACT_NAME','ชื่อ: ');
DEFINE('_CONTACT_ADDRESS','ที่อยู่: ');
DEFINE('_CONTACT_MISC','ข้อมูล: ');
DEFINE('_CONTACT_SEL','เลือกที่ติดต่อ:');

//pageNavigation
DEFINE('_PN_PAGE','หน้าที่');
DEFINE('_PN_OF','จาก');
DEFINE('_PN_START','เริ่ม');
DEFINE('_PN_PREVIOUS','ก่อนหน้า');
DEFINE('_PN_NEXT','ถัดไป');
DEFINE('_PN_END','จบ');
DEFINE('_PN_DISPLAY_NR','จำนวนที่ต้องการแสดง ');
DEFINE('_PN_RESULTS','ผลลัพธ์');

// emailfriend
DEFINE('_EMAIL_TITLE','ส่งอีเมล์ไปให้เพื่อน');
DEFINE('_EMAIL_FRIEND','ส่งข่าวนี้ไปให้เพื่อน');
DEFINE('_EMAIL_FRIEND_ADDR','อีเมล์ของเพื่อน:');
DEFINE('_EMAIL_YOUR_NAME','ชื่อคุณ:');
DEFINE('_EMAIL_YOUR_MAIL','อีเมล์ของคุณ:');
DEFINE('_BUTTON_SUBMIT_MAIL','ส่งอีเมล์');
DEFINE('_BUTTON_CANCEL','ยกเลิก');
DEFINE('_EMAIL_ERR_NOINFO','คุณต้องใส่อีเมล์ของคุณและอีเมล์ที่จะส่งไปให้ถูกต้อง');
DEFINE('_EMAIL_MSG','เวบเพจจากเวบไซต์ "%s" ได้ถูกส่งมาถึงคุณโดย %s ( %s )  คุณสามารถเข้าไปดูได้ที่ url: %s');
DEFINE('_EMAIL_INFO','เรื่องนี้ถูกส่งโดย');
DEFINE('_EMAIL_SENT','เรื่องนี้ถูกส่งไปยัง');
DEFINE('_PROMPT_CLOSE','ปิดหน้าต่าง');

// classes/html/content.php
DEFINE('_AUTHOR_BY', 'ส่งเรื่องมาโดย');
DEFINE('_WRITTEN_BY', 'เขียนโดย');
DEFINE('_LAST_UPDATED', 'ปรับปรุงเมื่อ');
DEFINE('_BACK','[กลับไปยังรายการ]');
DEFINE('_LEGEND','คำอธิบายสัญลักษณ์');
DEFINE('_DATE','วันที่');
DEFINE('_HEADER_TITLE','ชื่อเรื่อง');
DEFINE('_HEADER_AUTHOR','ผู้แต่ง');
DEFINE('_HEADER_SUBMITTED','ส่ง');
DEFINE('_HEADER_HITS','จำนวนการเข้าดู');
DEFINE('_E_EDIT','แก้ไข');
DEFINE('_E_ADD','เพิ่ม');
DEFINE('_E_WARNUSER','โปรดคลิกที่ไอคอน Save หรือ Cancel');
DEFINE('_E_WARNTITLE','ข้อมูลที่จะส่งต้องมีชื่อเรื่อง');
DEFINE('_E_WARNTEXT','ข้อมูลที่จะส่งต้องมีข้อความนำ');
DEFINE('_E_WARNCAT','โปรดเลือกหมวดหมู่');
DEFINE('_E_CONTENT','เนื้อหา');
DEFINE('_E_TITLE','ชื่อเรื่อง:');
DEFINE('_E_CATEGORY','หมวดหมู่:');
DEFINE('_E_INTRO','ข้อความนำ');
DEFINE('_E_MAIN','ข้อความหลัก');
DEFINE('_E_MOSIMAGE','แทรก {mosimage}');
DEFINE('_E_IMAGES','รูปภาพ');
DEFINE('_E_GALLERY_IMAGES','คลังรูปภาพ');
DEFINE('_E_CONTENT_IMAGES','รูปภาพสำหรับเนื้อหานี้');
DEFINE('_E_EDIT_IMAGE','แก้ไขรูปภาพ');
DEFINE('_E_INSERT','แทรก');
DEFINE('_E_UP','เลื่อนขึ้น');
DEFINE('_E_DOWN','เลื่อนลง');
DEFINE('_E_REMOVE','เอาออก');
DEFINE('_E_SOURCE','แหล่งที่มา:');
DEFINE('_E_ALIGN','การจัดวาง:');
DEFINE('_E_ALT','ชื่อรูป:');
DEFINE('_E_BORDER','ขอบ:');
DEFINE('_E_APPLY','ใช้งาน');
DEFINE('_E_PUBLISHING','เผยแพร่');
DEFINE('_E_STATE','สถานะ:');
DEFINE('_E_AUTHOR_ALIAS','นามปากกาผู้แต่ง:');
DEFINE('_E_ACCESS_LEVEL','ระดับการเข้าถึง:');
DEFINE('_E_ORDERING','การจัดลำดับ:');
DEFINE('_E_START_PUB','วันเริ่มเผยแพร่:');
DEFINE('_E_FINISH_PUB','วันสิ้นสุดการเผยแพร่:');
DEFINE('_E_SHOW_FP','ให้แสดงที่หน้าแรก:');
DEFINE('_E_HIDE_TITLE','ซ่อนชื่อเรื่อง:');
DEFINE('_E_METADATA','Metadata');
DEFINE('_E_M_DESC','คำอธิบาย:');
DEFINE('_E_M_KEY','คำสำคัญ:');
DEFINE('_E_SUBJECT','ชื่อเรื่อง:');
DEFINE('_E_EXPIRES','วันหมดอายุ:');
DEFINE('_E_VERSION','เวอร์ชั่น:');
DEFINE('_E_ABOUT','เกี่ยวกับ');
DEFINE('_E_CREATED','วันที่สร้าง:');
DEFINE('_E_LAST_MOD','วันที่แก้ไขล่าสุด:');
DEFINE('_E_HITS','จำนวนการเข้าดู:');
DEFINE('_E_SAVE','บันทึก');
DEFINE('_E_CANCEL','ยกเลิก');
DEFINE('_E_REGISTERED','สำหรับสมาชิกที่ลงทะเบียนเท่านั้น');
DEFINE('_E_ITEM_INFO','ข้อมูลของเรื่องนี้');
DEFINE('_E_ITEM_SAVED','ข้อมูลนี้ถูกบันทึกเรียบร้อยแล้ว');

// poll.php
DEFINE('_ALERT_ENABLED','ต้องเปิดการใช้งาน Cookies!');
DEFINE('_ALREADY_VOTE','วันนี้คุณได้ทำการลงคะแนนให้กับการสำรวจนี้แล้ว!');
DEFINE('_NO_SELECTION','ไม่มีการเลือก กรุณาลองใหม่อีกครั้ง');
DEFINE("_THANKS","ขอบคุณสำหรับการลงคะแนน!");
DEFINE("_SELECT_POLL","เลือกหัวข้อการสำรวจจากรายชื่อ");

// classes/html/poll.php
DEFINE('_JAN','มกราคม');
DEFINE('_FEB','กุมภาพันธ์');
DEFINE('_MAR','มีนาคม');
DEFINE('_APR','เมษายน');
DEFINE('_MAY','พฤษภาคม');
DEFINE('_JUN','มิถุนายน');
DEFINE('_JUL','กรกฎาคม');
DEFINE('_AUG','สิงหาคม');
DEFINE('_SEP','กันยายน');
DEFINE('_OCT','ตุลาคม');
DEFINE('_NOV','พฤศจิกายน');
DEFINE('_DEC','ธันวาคม');
DEFINE('_POLL_TITLE','การสำรวจ - ผลลัพธ์');
DEFINE('_SURVEY_TITLE','ชื่อการสำรวจ:');
DEFINE('_NUM_VOTERS','จำนวนผู้ลงคะแนน');
DEFINE('_FIRST_VOTE','การลงคะแนนครั้งแรก');
DEFINE('_LAST_VOTE','การลงคะแนนครั้งสุดท้าย');
DEFINE('_SEL_POLL','เลือกการสำรวจ:');
DEFINE('_NO_RESULTS','ไม่มีผลลัพธ์สำหรับการสำรวจนี้');

// registration.php
DEFINE('_ERROR_PASS','เสียใจด้วยครับ ไม่พบชื่อสมาชิกดังกล่าวในระบบ');
DEFINE('_NEWPASS_MSG','ชื่อสมาชิก $checkusername ซึ่งใช้งานกับที่อยู่อีเมล์นี้\n'
.'และเป็นสมาชิกของเวบไซต์ $mosConfig_live_site ได้ขอให้ส่งรหัสผ่านใหม่มาให้\n\n'
.'รหัสผ่านใหม่คือ : $newpass\n\n ถ้าคุณไม่ได้มีการร้องขอไปก็ไม่ต้องกังวล'
.'เพราะจะมีคุณเพียงคนเดียวเท่านั้นที่ได้รับอีเมล์นี้ ดังนั้นคุณเพียงแค่เข้าสู่ระบบด้วยรหัสผ่านใหม่นี้'
.'และเปลี่ยนรหัสผ่านเป็นรหัสผ่านที่คุณต้องการ');
DEFINE('_NEWPASS_SUB','$_sitename :: รหัสผ่านใหม่สำหรับ - $checkusername');
DEFINE('_NEWPASS_SENT','รหัสผ่านใหม่ได้ถูกสร้างและส่งไปเรียบร้อยแล้ว!');
DEFINE('_REGWARN_NAME','โปรดกรอกชื่อของคุณ');
DEFINE('_REGWARN_UNAME','โปรดกรอกชื่อสมาชิก');
DEFINE('_REGWARN_MAIL','โปรดกรอกที่อยู่อีเมล์');
DEFINE('_REGWARN_PASS','โปรดกรอกรหัสผ่าน (ต้องไม่มีช่องว่าง มีจำนวนมากกว่า 6 ตัวอักษรและประกอบด้วย 0-9,a-z,A-Z เท่านั้น');
DEFINE('_REGWARN_VPASS1','โปรดยืนยันรหัสผ่านอีกครั้ง');
DEFINE('_REGWARN_VPASS2','รหัสผ่านทั้งสองไม่ตรงกัน โปรดลองใหม่อีกครั้ง');
DEFINE('_REGWARN_INUSE','ชื่อสมาชิก/รหัสผ่านนี้มีผู้ใช้งานแล้ว โปรดใช้ชื่อสมาชิกอื่นแทน');
DEFINE('_SEND_SUB','รายละเอียดของสมาชิกใหม่');
DEFINE('_USEND_MSG','สวัสดีครับคุณ $name,\n\nคุณได้ถูกเพิ่มให้เป็นสมาชิกของเวบไซต์ $mosConfig_live_site.\n'
.'จดหมายฉบับนี้จะมีชื่อสมาชิกและรหัสผ่านเพื่อใช้ในการเข้าสู่ระบบของเวบไซต์ $mosConfig_live_site ดังนี้:\n\n'
.'ชื่อสมาชิก - $username\n'
.'รหัสผ่าน - $newpass\n\n\n'
.'โปรดอย่าตอบจดหมายฉบับนี้เพราะเป็นจดหมายที่ถูกสร้างขึ้นโดยอัตโนมัติเพื่อแจ้งข่าวเท่านั้น\n');
DEFINE('_USEND_MSG_NOPASS','สวัสดีครับคุณ $name,\n\n คุณได้ถูกเพิ่มให้เป็นสมาชิกของเวบไซต์ $mosConfig_live_site.\n'
.'คุณสามารถที่จะเข้าสู่ระบบของเวบไซต์ $mosConfig_live_site ด้วยชื่อสมาชิกและรหัสผ่านที่คุณลงทะเบียนไว้\n\n'
.'โปรดอย่าตอบจดหมายฉบับนี้เพราะเป็นจดหมายที่ถูกสร้างขึ้นโดยอัตโนมัติเพื่อแจ้งข่าวเท่านั้น\n');
DEFINE('_ASEND_MSG','Hello $adminName2,\n\n สมาชิกใหม่ได้ลงทะเบียนที่เวบไซต์ $mosConfig_live_site.\n'
.'โดยมีรายละเอียดของสมาชิกใหม่ดังนี้:\n\n'
.'ชื่อ - $name\n'
.'อีเมล์ - $email\n'
.'ชื่อสมาชิก - $username\n\n\n'
.'โปรดอย่าตอบจดหมายฉบับนี้เพราะเป็นจดหมายที่ถูกสร้างขึ้นโดยอัตโนมัติเพื่อแจ้งข่าวเท่านั้น\n');
DEFINE('_REG_COMPLETE','<span class="componentheading">การลงทะเบียนสมบูรณ์!</span><br />&nbsp;&nbsp;'
.'รหัสผ่านของคุณจะถูกจัดส่งไปยังที่อยู่อีเมล์ซึ่งคุณระบุ<br />&nbsp;&nbsp;'
.'เมื่อคุณได้รับรหัสผ่านแล้ว คุณจึงจะสามารถเข้าใช้งานระบบได้');
DEFINE('_REG_COMPLETE_NOPASS','<span class="componentheading">การลงทะเบียนสมบูรณ์!</span><br />&nbsp;&nbsp;'
.'คุณสามารถเข้าสู่ระบบได้แล้ว<br />&nbsp;&nbsp;');

// classes/html/registration.php
DEFINE('_PROMPT_PASSWORD','ลืมรหัสผ่าน?');
DEFINE('_NEW_PASS_DESC','โปรดกรอกชื่อสมาชิกและที่อยู่อีเมล์ของคุณจากนั้นคลิกที่ปุ่ม ส่งรหัสผ่าน<br />'
.'คุณจะได้รับรหัสผ่านใหม่ในเวลาอันสั้น และสามารถใช้รหัสผ่านใหม่นี้เพื่อเข้าใช้งานเวบไซต์ได้');
DEFINE('_PROMPT_UNAME','ชื่อสมาชิก:');
DEFINE('_PROMPT_EMAIL','ที่อยู่อีเมล์:');
DEFINE('_BUTTON_SEND_PASS','ส่งรหัสผ่าน');
DEFINE('_REGISTER_TITLE','ลงทะเบียน');
DEFINE('_REGISTER_NAME','ชื่อ:');
DEFINE('_REGISTER_UNAME','ชื่อสมาชิก:');
DEFINE('_REGISTER_EMAIL','ที่อยู่อีเมล์:');
DEFINE('_REGISTER_PASS','รหัสผ่าน:');
DEFINE('_REGISTER_VPASS','ยืนยันรหัสผ่าน:');
DEFINE('_BUTTON_SEND_REG','ส่งการลงทะเบียน');
DEFINE('_SENDING_PASSWORD','รหัสผ่านของคุณจะถูกส่งไปยังที่อยู่อีเมล์ที่คุณระบุไว้ด้านบน<br />เมื่อคุณได้รับรหัสผ่านใหม่แล้ว คุณสามารถที่จะเข้าสู่ระบบและเปลี่ยนรหัสผ่านได้');

// classes/html/search.php
DEFINE('_SEARCH_TITLE','ค้นหา');
DEFINE('_PROMPT_KEYWORD','ค้นหาคำสำคัญ');
DEFINE('_NUM_RESULTS','ได้ผลลัพธ์ที่ต้องการค้นหาจำนวน $c ผลลัพธ์');
DEFINE('_CONCLUSION','จำนวนผลลัพธ์ที่พบทั้งหมด $totalRows ผลลัพธ์  ต้องการค้นหา <b>$searchword</b> ด้วย');
DEFINE('_NOKEYWORD','ไม่พบผลลัพธ์ที่ต้องการ');
DEFINE('_IGNOREKEYWORD','คำทั่วไป 1 คำหรือมากกว่าได้ถูกละเว้นในการค้นหาครั้งนี้');

// templates/*.php
DEFINE('_ISO','charset=iso-8859-11');
DEFINE('_DATE_FORMAT','l, F d Y');  //Uses PHP's DATE Command Format - Depreciated
//
// Modify this line to reflect how you want the date to appear in your site
//
//e.g. DEFINE("_DATE_FORMAT_LC","%A, %d %B %Y %H:%M"); //Uses PHP's strftime Command Format

//Variable for display Buddhist Era
$today = GETDATE();
$y = $today['year'];
$BEy = $y+543;
///////////////////////////
DEFINE("_DATE_FORMAT_LC","วัน%Aที่ %d %B พ.ศ.$BEy"); //Uses PHP's strftime Command Format
DEFINE("_DATE_FORMAT_LC2","วัน%Aที่ %d %B พ.ศ.$BEy %H:%M");
DEFINE('_SEARCH_BOX','ค้นหา...');
DEFINE('_NEWSFLASH_BOX','ข่าวเด่น!');
DEFINE('_MAINMENU_BOX','เมนูหลัก');

// usermenu.php

// classes/html/usermenu.php
DEFINE('_UMENU_TITLE','เมนูสำหรับสมาชิก');
DEFINE('_HI','สวัสดีครับ คุณ');

// user.php
DEFINE('_SAVE_ERR','โปรดกรอกข้อมูลให้ครบทุกช่อง');
DEFINE('_THANK_SUB','ขอบคุณสำหรับการแจ้งข้อมูล ข้อมูลนี้จะถูกตรวจสอบก่อนที่จะนำเสนอในเวบไซต์');
DEFINE('_UP_SIZE','คุณไม่สามารถส่งไฟล์ที่ขนาดเกิน 15 กิโลไบต์ได้');
DEFINE('_UP_EXISTS','รูปภาพ $userfile_name นี้มีอยู่แล้ว โปรดกรอกชื่อใหม่');
DEFINE('_UP_COPY_FAIL','การทำสำเนาล้มเหลว');
DEFINE('_UP_TYPE_WARN','คุณสามารถส่งไฟล์รูปภาพชนิด gif หรือ jpg เท่านั้น');
DEFINE('_MAIL_SUB','ข้อมูลใหม่จากสมาชิก');
DEFINE('_MAIL_MSG','สวัสดีครับคุณ $adminName,\n\nสมาชิกชื่อ $author ได้ส่ง $type, $title'
.' มายังเวบไซต์ $mosConfig_live_site\n'
.'โปรดเข้าไปยัง $mosConfig_live_site/administrator เพื่อตรวจสอบและอนุมัติ $type.\n\n'
.'โปรดอย่าตอบจดหมายฉบับนี้เพราะเป็นจดหมายที่ถูกสร้างขึ้นโดยอัตโนมัติเพื่อแจ้งข่าวเท่านั้น\n');
DEFINE('_PASS_VERR1','ถ้าคุณมีการเปลี่ยนรหัสผ่าน โปรดกรอกรหัสผ่านใหม่อีกครั้งเพื่อยืนยัน');
DEFINE('_PASS_VERR2','ถ้าคุณมีการเปลี่ยนรหัสผ่าน โปรดตรวจสอบให้แน่ใจว่ารหัสผ่านทั้งสองเหมือนกัน');
DEFINE('_UNAME_INUSE','ชื่อสมาชิกนี้ถูกใช้งานแล้ว');
DEFINE('_UPDATE','ปรับปรุง');
DEFINE('_USER_DETAILS_SAVE','การแก้ไขของคุณได้ถูกบันทึกเรียบร้อยแล้ว');

// components/com_user/*
DEFINE('_EDIT_TITLE','แก้ไขรายละเอียดส่วนตัว');
DEFINE('_YOUR_NAME','ชื่อ:');
DEFINE('_EMAIL','ที่อยู่อีเมล์:');
DEFINE('_UNAME','ชื่อสมาชิก:');
DEFINE('_PASS','รหัสผ่าน:');
DEFINE('_VPASS','ยืนยันรหัสผ่าน:');
DEFINE('_SUBMIT_SUCCESS','การส่งข้อมูลสำเร็จ!');
DEFINE('_SUBMIT_SUCCESS_DESC','เรื่องของคุณได้ถูกส่งให้กับผู้ดูแลระบบเรียบร้อยแล้ว โดยผู้ดูแลระบบจะทำการตรวจสอบก่อนที่จะเผยแพร่เรื่องดังกล่าวในเวบไซต์');
DEFINE('_WELCOME','ยินดีต้อนรับ!');
DEFINE('_WELCOME_DESC','ยินดีต้อนรับเข้าสู่ส่วนสำหรับสมาชิกของเวบไซต์เรา');
DEFINE('_CONF_CHECKED_IN','ข้อมูลที่ถูก checked out ได้ถูก checked in หมดแล้ว');
DEFINE('_CHECK_TABLE','ตรวจสอบตาราง');
DEFINE('_CHECKED_IN','Checked in ');
DEFINE('_CHECKED_IN_ITEMS',' เรื่อง');
DEFINE('_PASS_MATCH','รหัสผ่านไม่ตรงกัน');

// components/com_login/*
DEFINE('_ALREADY_LOGIN','คุณได้เข้าสู่ระบบเรียบร้อยแล้ว!');
DEFINE('_LOGOUT','คลิกที่นี่เพื่อออกจากระบบ');
DEFINE('_LOGIN_TEXT','ใช้ช่องสำหรับกรอกชื่อสมาชิกและรหัสผ่านด้านตรงข้ามเพื่อให้เข้าถึงระบบได้เต็มที่'); 

// components/com_weblinks/*
DEFINE('_WEBLINKS_TITLE','เวบไซต์ที่น่าสนใจ');
DEFINE('_WEBLINKS_DESC','เราจะค้นหาเวบไซต์ที่มีประโยชน์อย่างสม่ำเสมอและนำมารายชื่อมาใส่ไว้'
.'เพื่อให้คุณได้ข้อมูลที่มีประโยชน์  <br />จากรายชื่อด้านล่าง คุณสามารถเลือกหัวข้อเวบไซต์ที่คุณสนใจ จากนั้นให้เลือก URL ของเวบไซต์ที่คุณต้องการดู');
DEFINE('_HEADER_TITLE_WEBLINKS','เวบไซต์ที่น่าสนใจ');
DEFINE('_SECTION','หมวดหมู่:');
DEFINE('_SUBMIT_LINK','ส่งรายชื่อเวบไซต์ที่น่าสนใจ');
DEFINE('_URL','URL:');
DEFINE('_URL_DESC','คำอธิบาย:');
DEFINE('_NAME','ชื่อ:');
DEFINE('_WEBLINK_EXIST','ชื่อเวบไซต์ดังกล่าวมีอยู่ในฐานข้อมูลแล้ว โปรดลองใหม่อีกครั้ง');
DEFINE('_WEBLINK_TITLE','เวบไซต์ที่คุณต้องการส่งจะต้องมีชื่อ');

// whos_online.php
DEFINE('_WE_HAVE', 'เรามีผู้ชมเป็น ');
DEFINE('_AND', 'และ');
DEFINE('_GUEST_COUNT','ผู้มาเยี่ยม $guest_array คน');
DEFINE('_GUESTS_COUNT','ผู้มาเยี่ยม $guest_array คน');
DEFINE('_MEMBER_COUNT','สมาชิก $user_array คน');
DEFINE('_MEMBERS_COUNT','สมาชิก $user_array คน');
DEFINE('_ONLINE','ออนไลน์');

// modules/mod_online.php
DEFINE('_NONE','ไม่มีสมาชิกออนไลน์');

// modules/mod_browser_prefs.php
DEFINE('_ADD_FAV','เพิ่มไว้ในรายการเวบที่ชื่นชอบ');
DEFINE('_MAKE_HOME','กำหนดให้เป็นโฮมเพจ');

// modules/mod_counter.php
DEFINE('_VISITORS','คน');

// modules/mod_stats.php
DEFINE('_TIME_STAT','เวลาปัจจุบัน');
DEFINE('_MEMBERS_STAT','จำนวนสมาชิก');
DEFINE('_HITS_STAT','จำนวนการเข้าดู');
DEFINE('_NEWS_STAT','จำนวนข่าว');
DEFINE('_LINKS_STAT','จำนวนเวบไซต์ที่น่าสนใจ');

// modules/mod_rssfeed.php
DEFINE('_RSSFEED','รับข่าวล่าสุด<br />ส่งตรงถึงเดสก์ทอปของคุณ');
?>
