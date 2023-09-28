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

defined( '_VALID_MOS' ) or die( '�س������Ѻ͹حҵ�����Ҷ֧���觢����Ź���µç' );

// common
DEFINE("_NOT_AUTH","�س������Ѻ͹حҵ���٢����Ź��");
DEFINE("_DO_LOGIN","��س��͡�Թ");
DEFINE('_VALID_AZ09',"�ô��͡ %s ���١��ͧ  ��� ����ժ�ͧ��ҧ �յ���ѡ���ҡ���� %d �����е�ͧ��Сͺ���� 0-9,a-z,A-Z ��ҹ��");
DEFINE('_CMN_YES',"��");
DEFINE('_CMN_NO',"�����");

DEFINE('_CMN_NAME',"����");
DEFINE('_CMN_DESCRIPTION',"��͸Ժ��");
DEFINE('_CMN_SAVE',"�ѹ�֡");
DEFINE('_CMN_CANCEL',"¡��ԡ");
DEFINE('_CMN_PRINT',"�����");
DEFINE('_CMN_PDF',"PDF");
DEFINE('_CMN_EMAIL',"��������");
DEFINE('_CMN_PARENT',"Parent"); // in the context of parent folder, parent menu item, etc
DEFINE('_CMN_ORDERING',"��èѴ�ӴѺ");
DEFINE('_CMN_ACCESS',"�дѺ�����Ҷ֧");
DEFINE('_CMN_SELECT',"���͡");

DEFINE('_CMN_NEXT',"�Ѵ�");
DEFINE('_CMN_NEXT_ARROW',"&gt;&gt;");
DEFINE('_CMN_PREV',"��͹˹��");
DEFINE('_CMN_PREV_ARROW',"&gt;&gt;");

DEFINE('_CMN_SORT_NONE',"����ա�����§");
DEFINE('_CMN_SORT_ASC',"���§�ҡ������ҡ");
DEFINE('_CMN_SORT_DESC',"���§�ҡ�ҡ仹���");

DEFINE('_CMN_NEW',"����");
DEFINE('_CMN_NONE',"�����");
DEFINE('_CMN_LEFT',"�ҧ����");
DEFINE('_CMN_RIGHT',"�ҧ���");
DEFINE('_CMN_CENTER',"�ç��ҧ");

DEFINE('_CMN_PUBLISHED',"�����");
DEFINE('_CMN_UNPUBLISHED',"��������");

DEFINE('_CMN_FOLDER',"������");
DEFINE('_CMN_SUBFOLDER',"����������");
DEFINE('_CMN_OPTIONAL',"������������");
DEFINE('_CMN_REQUIRED',"��ͧ��");

DEFINE('_CMN_CONTINUE',"����");

DEFINE('_CMN_NEW_ITEM',"���������������ӴѺ�ش��������");
DEFINE('_LOGIN_INCOMPLETE','�ô��͡������Ҫԡ������ʼ�ҹ���ú��ǹ');
DEFINE('_LOGIN_BLOCKED','������Ҫԡ���١������ҹ �ô�Դ��ͼ�������к�');
DEFINE('_LOGIN_INCORRECT','������Ҫԡ������ʼ�ҹ���١��ͧ �ô�ͧ�����ա����');
DEFINE('_LOGIN_NOADMINS','�س�������ö�������к��� ���ͧ�ҡ����ա��������к�������');

//mambots
DEFINE('_TOC_JUMPTO',"������ѧ");

//content
DEFINE('_READ_MORE','��������´...');
DEFINE('_READ_MORE_REGISTER','ŧ����¹������ҹ���...');
DEFINE('_MORE','�յ��...');
DEFINE('_ON_NEW_CONTENT', "����������١���� %s ����ͧ %s" );
DEFINE('_SEL_CATEGORY','���͡��Ǵ����');
DEFINE('_NOT_EXIST','������Ǻྨ���س��ͧ��ô�<br />�ô���͡�Ǻྨ�ҡ������ѡ');

//classes/html/modules.php
DEFINE('_BUTTON_VOTE','ŧ��ṹ');
DEFINE('_BUTTON_RESULTS','���Ѿ��');
DEFINE('_USERNAME','������Ҫԡ');
DEFINE('_LOST_PASSWORD','������ʼ�ҹ');
DEFINE('_PASSWORD','���ʼ�ҹ');
DEFINE('_BUTTON_LOGIN','�������к�');
DEFINE('_BUTTON_LOGOUT','�͡�ҡ�к�');
DEFINE('_NO_ACCOUNT','�ѧ����պѭ����Ҫԡ?');
DEFINE('_CREATE_ACCOUNT','���ҧ�ѭ����Ҫԡ');
DEFINE('_VOTE_POOR','���');
DEFINE('_VOTE_BEST','�շ���ش');
DEFINE('_USER_RATING','��û����Թ�ҡ��Ҫԡ');
DEFINE('_RATE_BUTTON','�����Թ');

//contact.php
DEFINE('_ENQUIRY','����ͺ���');
DEFINE('_ENQUIRY_TEXT','�������ͺ�������Ҩҡ');
DEFINE('_THANK_MESSAGE','�ͺ�س����Ѻ�������Ѻ');

// classes/html/contact.php
DEFINE('_CONTACT_TITLE','ʶҹ���Դ���');
DEFINE('_NAME_PROMPT',' ���ͧ͢�س:');
DEFINE('_EMAIL_PROMPT','������ͧ�س:');
DEFINE('_MESSAGE_PROMPT','��ͤ���:');
DEFINE('_SEND_BUTTON','��');
DEFINE('_CONTACT_FORM_NC','�ô��Ǩ�ͺ������������͡�����Ťú��ǹ��ж١��ͧ');
DEFINE('_TELEPHONE','���Ѿ��: ');
DEFINE('_FAX','ῡ��: ');
DEFINE('_CONTACT_NAME','����: ');
DEFINE('_CONTACT_ADDRESS','�������: ');
DEFINE('_CONTACT_MISC','������: ');
DEFINE('_CONTACT_SEL','���͡���Դ���:');

//pageNavigation
DEFINE('_PN_PAGE','˹�ҷ��');
DEFINE('_PN_OF','�ҡ');
DEFINE('_PN_START','�����');
DEFINE('_PN_PREVIOUS','��͹˹��');
DEFINE('_PN_NEXT','�Ѵ�');
DEFINE('_PN_END','��');
DEFINE('_PN_DISPLAY_NR','�ӹǹ����ͧ����ʴ� ');
DEFINE('_PN_RESULTS','���Ѿ��');

// emailfriend
DEFINE('_EMAIL_TITLE','���������������͹');
DEFINE('_EMAIL_FRIEND','�觢��ǹ���������͹');
DEFINE('_EMAIL_FRIEND_ADDR','������ͧ���͹:');
DEFINE('_EMAIL_YOUR_NAME','���ͤس:');
DEFINE('_EMAIL_YOUR_MAIL','������ͧ�س:');
DEFINE('_BUTTON_SUBMIT_MAIL','��������');
DEFINE('_BUTTON_CANCEL','¡��ԡ');
DEFINE('_EMAIL_ERR_NOINFO','�س��ͧ���������ͧ�س������������������١��ͧ');
DEFINE('_EMAIL_MSG','�Ǻྨ�ҡ�Ǻ䫵� "%s" ��١���Ҷ֧�س�� %s ( %s )  �س����ö���仴����� url: %s');
DEFINE('_EMAIL_INFO','����ͧ���١����');
DEFINE('_EMAIL_SENT','����ͧ���١����ѧ');
DEFINE('_PROMPT_CLOSE','�Դ˹�ҵ�ҧ');

// classes/html/content.php
DEFINE('_AUTHOR_BY', '������ͧ����');
DEFINE('_WRITTEN_BY', '��¹��');
DEFINE('_LAST_UPDATED', '��Ѻ��ا�����');
DEFINE('_BACK','[��Ѻ��ѧ��¡��]');
DEFINE('_LEGEND','��͸Ժ���ѭ�ѡɳ�');
DEFINE('_DATE','�ѹ���');
DEFINE('_HEADER_TITLE','��������ͧ');
DEFINE('_HEADER_AUTHOR','�����');
DEFINE('_HEADER_SUBMITTED','��');
DEFINE('_HEADER_HITS','�ӹǹ�����Ҵ�');
DEFINE('_E_EDIT','���');
DEFINE('_E_ADD','����');
DEFINE('_E_WARNUSER','�ô��ԡ����ͤ͹ Save ���� Cancel');
DEFINE('_E_WARNTITLE','�����ŷ����觵�ͧ�ժ�������ͧ');
DEFINE('_E_WARNTEXT','�����ŷ����觵�ͧ�բ�ͤ�����');
DEFINE('_E_WARNCAT','�ô���͡��Ǵ����');
DEFINE('_E_CONTENT','������');
DEFINE('_E_TITLE','��������ͧ:');
DEFINE('_E_CATEGORY','��Ǵ����:');
DEFINE('_E_INTRO','��ͤ�����');
DEFINE('_E_MAIN','��ͤ�����ѡ');
DEFINE('_E_MOSIMAGE','�á {mosimage}');
DEFINE('_E_IMAGES','�ٻ�Ҿ');
DEFINE('_E_GALLERY_IMAGES','��ѧ�ٻ�Ҿ');
DEFINE('_E_CONTENT_IMAGES','�ٻ�Ҿ����Ѻ�����ҹ��');
DEFINE('_E_EDIT_IMAGE','����ٻ�Ҿ');
DEFINE('_E_INSERT','�á');
DEFINE('_E_UP','����͹���');
DEFINE('_E_DOWN','����͹ŧ');
DEFINE('_E_REMOVE','����͡');
DEFINE('_E_SOURCE','���觷����:');
DEFINE('_E_ALIGN','��èѴ�ҧ:');
DEFINE('_E_ALT','�����ٻ:');
DEFINE('_E_BORDER','�ͺ:');
DEFINE('_E_APPLY','��ҹ');
DEFINE('_E_PUBLISHING','�����');
DEFINE('_E_STATE','ʶҹ�:');
DEFINE('_E_AUTHOR_ALIAS','����ҡ�Ҽ����:');
DEFINE('_E_ACCESS_LEVEL','�дѺ�����Ҷ֧:');
DEFINE('_E_ORDERING','��èѴ�ӴѺ:');
DEFINE('_E_START_PUB','�ѹ����������:');
DEFINE('_E_FINISH_PUB','�ѹ����ش��������:');
DEFINE('_E_SHOW_FP','����ʴ����˹���á:');
DEFINE('_E_HIDE_TITLE','��͹��������ͧ:');
DEFINE('_E_METADATA','Metadata');
DEFINE('_E_M_DESC','��͸Ժ��:');
DEFINE('_E_M_KEY','���Ӥѭ:');
DEFINE('_E_SUBJECT','��������ͧ:');
DEFINE('_E_EXPIRES','�ѹ�������:');
DEFINE('_E_VERSION','�������:');
DEFINE('_E_ABOUT','����ǡѺ');
DEFINE('_E_CREATED','�ѹ������ҧ:');
DEFINE('_E_LAST_MOD','�ѹ����������ش:');
DEFINE('_E_HITS','�ӹǹ�����Ҵ�:');
DEFINE('_E_SAVE','�ѹ�֡');
DEFINE('_E_CANCEL','¡��ԡ');
DEFINE('_E_REGISTERED','����Ѻ��Ҫԡ���ŧ����¹��ҹ��');
DEFINE('_E_ITEM_INFO','�����Ţͧ����ͧ���');
DEFINE('_E_ITEM_SAVED','�����Ź��١�ѹ�֡���º��������');

// poll.php
DEFINE('_ALERT_ENABLED','��ͧ�Դ�����ҹ Cookies!');
DEFINE('_ALREADY_VOTE','�ѹ���س��ӡ��ŧ��ṹ���Ѻ������Ǩ�������!');
DEFINE('_NO_SELECTION','����ա�����͡ ��س��ͧ�����ա����');
DEFINE("_THANKS","�ͺ�س����Ѻ���ŧ��ṹ!");
DEFINE("_SELECT_POLL","���͡��Ǣ�͡�����Ǩ�ҡ��ª���");

// classes/html/poll.php
DEFINE('_JAN','���Ҥ�');
DEFINE('_FEB','����Ҿѹ��');
DEFINE('_MAR','�չҤ�');
DEFINE('_APR','����¹');
DEFINE('_MAY','����Ҥ�');
DEFINE('_JUN','�Զع�¹');
DEFINE('_JUL','�á�Ҥ�');
DEFINE('_AUG','�ԧ�Ҥ�');
DEFINE('_SEP','�ѹ��¹');
DEFINE('_OCT','���Ҥ�');
DEFINE('_NOV','��Ȩԡ�¹');
DEFINE('_DEC','�ѹ�Ҥ�');
DEFINE('_POLL_TITLE','������Ǩ - ���Ѿ��');
DEFINE('_SURVEY_TITLE','���͡�����Ǩ:');
DEFINE('_NUM_VOTERS','�ӹǹ���ŧ��ṹ');
DEFINE('_FIRST_VOTE','���ŧ��ṹ�����á');
DEFINE('_LAST_VOTE','���ŧ��ṹ�����ش����');
DEFINE('_SEL_POLL','���͡������Ǩ:');
DEFINE('_NO_RESULTS','����ռ��Ѿ������Ѻ������Ǩ���');

// registration.php
DEFINE('_ERROR_PASS','����㨴��¤�Ѻ ��辺������Ҫԡ�ѧ�������к�');
DEFINE('_NEWPASS_MSG','������Ҫԡ $checkusername �����ҹ�Ѻ���������������\n'
.'�������Ҫԡ�ͧ�Ǻ䫵� $mosConfig_live_site �����������ʼ�ҹ���������\n\n'
.'���ʼ�ҹ������ : $newpass\n\n ��Ҥس������ա����ͧ��仡�����ͧ�ѧ��'
.'���Ш��դس��§��������ҹ�鹷�����Ѻ�������� �ѧ��鹤س��§���������к��������ʼ�ҹ������'
.'�������¹���ʼ�ҹ�����ʼ�ҹ���س��ͧ���');
DEFINE('_NEWPASS_SUB','$_sitename :: ���ʼ�ҹ��������Ѻ - $checkusername');
DEFINE('_NEWPASS_SENT','���ʼ�ҹ������١���ҧ���������º��������!');
DEFINE('_REGWARN_NAME','�ô��͡���ͧ͢�س');
DEFINE('_REGWARN_UNAME','�ô��͡������Ҫԡ');
DEFINE('_REGWARN_MAIL','�ô��͡�������������');
DEFINE('_REGWARN_PASS','�ô��͡���ʼ�ҹ (��ͧ����ժ�ͧ��ҧ �ըӹǹ�ҡ���� 6 ����ѡ����л�Сͺ���� 0-9,a-z,A-Z ��ҹ��');
DEFINE('_REGWARN_VPASS1','�ô�׹�ѹ���ʼ�ҹ�ա����');
DEFINE('_REGWARN_VPASS2','���ʼ�ҹ����ͧ���ç�ѹ �ô�ͧ�����ա����');
DEFINE('_REGWARN_INUSE','������Ҫԡ/���ʼ�ҹ����ռ����ҹ���� �ô�������Ҫԡ���᷹');
DEFINE('_SEND_SUB','��������´�ͧ��Ҫԡ����');
DEFINE('_USEND_MSG','���ʴդ�Ѻ�س $name,\n\n�س��١�����������Ҫԡ�ͧ�Ǻ䫵� $mosConfig_live_site.\n'
.'�����©�Ѻ�����ժ�����Ҫԡ������ʼ�ҹ������㹡���������к��ͧ�Ǻ䫵� $mosConfig_live_site �ѧ���:\n\n'
.'������Ҫԡ - $username\n'
.'���ʼ�ҹ - $newpass\n\n\n'
.'�ô���ҵͺ�����©�Ѻ��������繨����·��١���ҧ������ѵ��ѵ������駢�����ҹ��\n');
DEFINE('_USEND_MSG_NOPASS','���ʴդ�Ѻ�س $name,\n\n �س��١�����������Ҫԡ�ͧ�Ǻ䫵� $mosConfig_live_site.\n'
.'�س����ö�����������к��ͧ�Ǻ䫵� $mosConfig_live_site ���ª�����Ҫԡ������ʼ�ҹ���سŧ����¹���\n\n'
.'�ô���ҵͺ�����©�Ѻ��������繨����·��١���ҧ������ѵ��ѵ������駢�����ҹ��\n');
DEFINE('_ASEND_MSG','Hello $adminName2,\n\n ��Ҫԡ������ŧ����¹����Ǻ䫵� $mosConfig_live_site.\n'
.'������������´�ͧ��Ҫԡ����ѧ���:\n\n'
.'���� - $name\n'
.'������ - $email\n'
.'������Ҫԡ - $username\n\n\n'
.'�ô���ҵͺ�����©�Ѻ��������繨����·��١���ҧ������ѵ��ѵ������駢�����ҹ��\n');
DEFINE('_REG_COMPLETE','<span class="componentheading">���ŧ����¹����ó�!</span><br />&nbsp;&nbsp;'
.'���ʼ�ҹ�ͧ�س�ж١�Ѵ����ѧ��������������觤س�к�<br />&nbsp;&nbsp;'
.'����ͤس���Ѻ���ʼ�ҹ���� �س�֧������ö�����ҹ�к���');
DEFINE('_REG_COMPLETE_NOPASS','<span class="componentheading">���ŧ����¹����ó�!</span><br />&nbsp;&nbsp;'
.'�س����ö�������к�������<br />&nbsp;&nbsp;');

// classes/html/registration.php
DEFINE('_PROMPT_PASSWORD','������ʼ�ҹ?');
DEFINE('_NEW_PASS_DESC','�ô��͡������Ҫԡ��з������������ͧ�س�ҡ��鹤�ԡ������ �����ʼ�ҹ<br />'
.'�س�����Ѻ���ʼ�ҹ����������ѹ��� �������ö�����ʼ�ҹ���������������ҹ�Ǻ䫵���');
DEFINE('_PROMPT_UNAME','������Ҫԡ:');
DEFINE('_PROMPT_EMAIL','�������������:');
DEFINE('_BUTTON_SEND_PASS','�����ʼ�ҹ');
DEFINE('_REGISTER_TITLE','ŧ����¹');
DEFINE('_REGISTER_NAME','����:');
DEFINE('_REGISTER_UNAME','������Ҫԡ:');
DEFINE('_REGISTER_EMAIL','�������������:');
DEFINE('_REGISTER_PASS','���ʼ�ҹ:');
DEFINE('_REGISTER_VPASS','�׹�ѹ���ʼ�ҹ:');
DEFINE('_BUTTON_SEND_REG','�觡��ŧ����¹');
DEFINE('_SENDING_PASSWORD','���ʼ�ҹ�ͧ�س�ж١����ѧ���������������س�к�����ҹ��<br />����ͤس���Ѻ���ʼ�ҹ�������� �س����ö�����������к��������¹���ʼ�ҹ��');

// classes/html/search.php
DEFINE('_SEARCH_TITLE','����');
DEFINE('_PROMPT_KEYWORD','���Ҥ��Ӥѭ');
DEFINE('_NUM_RESULTS','����Ѿ�����ͧ��ä��Ҩӹǹ $c ���Ѿ��');
DEFINE('_CONCLUSION','�ӹǹ���Ѿ���辺������ $totalRows ���Ѿ��  ��ͧ��ä��� <b>$searchword</b> ����');
DEFINE('_NOKEYWORD','��辺���Ѿ�����ͧ���');
DEFINE('_IGNOREKEYWORD','�ӷ���� 1 �������ҡ������١�����㹡�ä��Ҥ��駹��');

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
DEFINE("_DATE_FORMAT_LC","�ѹ%A��� %d %B �.�.$BEy"); //Uses PHP's strftime Command Format
DEFINE("_DATE_FORMAT_LC2","�ѹ%A��� %d %B �.�.$BEy %H:%M");
DEFINE('_SEARCH_BOX','����...');
DEFINE('_NEWSFLASH_BOX','������!');
DEFINE('_MAINMENU_BOX','������ѡ');

// usermenu.php

// classes/html/usermenu.php
DEFINE('_UMENU_TITLE','��������Ѻ��Ҫԡ');
DEFINE('_HI','���ʴդ�Ѻ �س');

// user.php
DEFINE('_SAVE_ERR','�ô��͡���������ú�ء��ͧ');
DEFINE('_THANK_SUB','�ͺ�س����Ѻ����駢����� �����Ź��ж١��Ǩ�ͺ��͹���й��ʹ���Ǻ䫵�');
DEFINE('_UP_SIZE','�س�������ö������袹Ҵ�Թ 15 ����亵���');
DEFINE('_UP_EXISTS','�ٻ�Ҿ $userfile_name ������������� �ô��͡��������');
DEFINE('_UP_COPY_FAIL','��÷������������');
DEFINE('_UP_TYPE_WARN','�س����ö������ٻ�Ҿ��Դ gif ���� jpg ��ҹ��');
DEFINE('_MAIL_SUB','����������ҡ��Ҫԡ');
DEFINE('_MAIL_MSG','���ʴդ�Ѻ�س $adminName,\n\n��Ҫԡ���� $author ���� $type, $title'
.' ���ѧ�Ǻ䫵� $mosConfig_live_site\n'
.'�ô�����ѧ $mosConfig_live_site/administrator ���͵�Ǩ�ͺ���͹��ѵ� $type.\n\n'
.'�ô���ҵͺ�����©�Ѻ��������繨����·��١���ҧ������ѵ��ѵ������駢�����ҹ��\n');
DEFINE('_PASS_VERR1','��Ҥس�ա������¹���ʼ�ҹ �ô��͡���ʼ�ҹ�����ա���������׹�ѹ');
DEFINE('_PASS_VERR2','��Ҥس�ա������¹���ʼ�ҹ �ô��Ǩ�ͺ������������ʼ�ҹ����ͧ����͹�ѹ');
DEFINE('_UNAME_INUSE','������Ҫԡ���١��ҹ����');
DEFINE('_UPDATE','��Ѻ��ا');
DEFINE('_USER_DETAILS_SAVE','�����䢢ͧ�س��١�ѹ�֡���º��������');

// components/com_user/*
DEFINE('_EDIT_TITLE','�����������´��ǹ���');
DEFINE('_YOUR_NAME','����:');
DEFINE('_EMAIL','�������������:');
DEFINE('_UNAME','������Ҫԡ:');
DEFINE('_PASS','���ʼ�ҹ:');
DEFINE('_VPASS','�׹�ѹ���ʼ�ҹ:');
DEFINE('_SUBMIT_SUCCESS','����觢����������!');
DEFINE('_SUBMIT_SUCCESS_DESC','����ͧ�ͧ�س��١�����Ѻ�������к����º�������� �¼������к��зӡ�õ�Ǩ�ͺ��͹�������������ͧ�ѧ�������Ǻ䫵�');
DEFINE('_WELCOME','�Թ�յ�͹�Ѻ!');
DEFINE('_WELCOME_DESC','�Թ�յ�͹�Ѻ��������ǹ����Ѻ��Ҫԡ�ͧ�Ǻ䫵����');
DEFINE('_CONF_CHECKED_IN','�����ŷ��١ checked out ��١ checked in �������');
DEFINE('_CHECK_TABLE','��Ǩ�ͺ���ҧ');
DEFINE('_CHECKED_IN','Checked in ');
DEFINE('_CHECKED_IN_ITEMS',' ����ͧ');
DEFINE('_PASS_MATCH','���ʼ�ҹ���ç�ѹ');

// components/com_login/*
DEFINE('_ALREADY_LOGIN','�س���������к����º��������!');
DEFINE('_LOGOUT','��ԡ����������͡�ҡ�к�');
DEFINE('_LOGIN_TEXT','���ͧ����Ѻ��͡������Ҫԡ������ʼ�ҹ��ҹ�ç�������������Ҷ֧�к���������'); 

// components/com_weblinks/*
DEFINE('_WEBLINKS_TITLE','�Ǻ䫵�����ʹ�');
DEFINE('_WEBLINKS_DESC','��ҨФ����Ǻ䫵����ջ���ª�����ҧ����������й�����ª�����������'
.'�������س������ŷ���ջ���ª��  <br />�ҡ��ª��ʹ�ҹ��ҧ �س����ö���͡��Ǣ���Ǻ䫵���سʹ� �ҡ���������͡ URL �ͧ�Ǻ䫵���س��ͧ��ô�');
DEFINE('_HEADER_TITLE_WEBLINKS','�Ǻ䫵�����ʹ�');
DEFINE('_SECTION','��Ǵ����:');
DEFINE('_SUBMIT_LINK','����ª����Ǻ䫵�����ʹ�');
DEFINE('_URL','URL:');
DEFINE('_URL_DESC','��͸Ժ��:');
DEFINE('_NAME','����:');
DEFINE('_WEBLINK_EXIST','�����Ǻ䫵�ѧ�����������㹰ҹ���������� �ô�ͧ�����ա����');
DEFINE('_WEBLINK_TITLE','�Ǻ䫵���س��ͧ����觨е�ͧ�ժ���');

// whos_online.php
DEFINE('_WE_HAVE', '����ռ����� ');
DEFINE('_AND', '���');
DEFINE('_GUEST_COUNT','����������� $guest_array ��');
DEFINE('_GUESTS_COUNT','����������� $guest_array ��');
DEFINE('_MEMBER_COUNT','��Ҫԡ $user_array ��');
DEFINE('_MEMBERS_COUNT','��Ҫԡ $user_array ��');
DEFINE('_ONLINE','�͹�Ź�');

// modules/mod_online.php
DEFINE('_NONE','�������Ҫԡ�͹�Ź�');

// modules/mod_browser_prefs.php
DEFINE('_ADD_FAV','����������¡���Ǻ����蹪ͺ');
DEFINE('_MAKE_HOME','��˹���������ྨ');

// modules/mod_counter.php
DEFINE('_VISITORS','��');

// modules/mod_stats.php
DEFINE('_TIME_STAT','���һѨ�غѹ');
DEFINE('_MEMBERS_STAT','�ӹǹ��Ҫԡ');
DEFINE('_HITS_STAT','�ӹǹ�����Ҵ�');
DEFINE('_NEWS_STAT','�ӹǹ����');
DEFINE('_LINKS_STAT','�ӹǹ�Ǻ䫵�����ʹ�');

// modules/mod_rssfeed.php
DEFINE('_RSSFEED','�Ѻ��������ش<br />�觵ç�֧�ʡ�ͻ�ͧ�س');
?>
