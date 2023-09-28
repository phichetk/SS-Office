﻿/*
 * FCKeditor - The text editor for internet
 * Copyright (C) 2003-2006 Frederico Caldeira Knabben
 * 
 * Licensed under the terms of the GNU Lesser General Public License:
 * 		http://www.opensource.org/licenses/lgpl-license.php
 * 
 * For further information visit:
 * 		http://www.fckeditor.net/
 * 
 * "Support Open Source software. What about a donation today?"
 * 
 * File Name: fr.js
 * 	French language file.
 * 
 * File Authors:
 * 		Hubert Garrido (liane@users.sourceforge.net)
 */

var FCKLang =
{
// Language direction : "ltr" (left to right) or "rtl" (right to left).
Dir					: "ltr",

ToolbarCollapse		: "Masquer Outils",
ToolbarExpand		: "Afficher Outils",

// Toolbar Items and Context Menu
Save				: "Enregistrer",
NewPage				: "Nouvelle page",
Preview				: "Prévisualisation",
Cut					: "Couper",
Copy				: "Copier",
Paste				: "Coller",
PasteText			: "Coller comme texte",
PasteWord			: "Coller de Word",
Print				: "Imprimer",
SelectAll			: "Tout sélectionner",
RemoveFormat		: "Supprimer le format",
InsertLinkLbl		: "Lien",
InsertLink			: "Insérer/modifier le lien",
RemoveLink			: "Supprimer le lien",
Anchor				: "Insérer/modifier l'ancre",
InsertImageLbl		: "Image",
InsertImage			: "Insérer/modifier l'image",
InsertFlashLbl		: "Animation Flash",
InsertFlash			: "Insérer/modifier l'animation Flash",
InsertTableLbl		: "Tableau",
InsertTable			: "Insérer/modifier le tableau",
InsertLineLbl		: "Séparateur",
InsertLine			: "Insérer un séparateur",
InsertSpecialCharLbl: "Caractères spéciaux",
InsertSpecialChar	: "Insérer un caractère spécial",
InsertSmileyLbl		: "Smiley",
InsertSmiley		: "Insérer un Smiley",
About				: "A propos de FCKeditor",
Bold				: "Gras",
Italic				: "Italique",
Underline			: "Souligné",
StrikeThrough		: "Barré",
Subscript			: "Indice",
Superscript			: "Exposant",
LeftJustify			: "Aligné à gauche",
CenterJustify		: "Centré",
RightJustify		: "Aligné à Droite",
BlockJustify		: "Texte justifié",
DecreaseIndent		: "Diminuer le retrait",
IncreaseIndent		: "Augmenter le retrait",
Undo				: "Annuler",
Redo				: "Refaire",
NumberedListLbl		: "Liste numérotée",
NumberedList		: "Insérer/supprimer la  liste numérotée",
BulletedListLbl		: "Liste à puces",
BulletedList		: "Insérer/supprimer la liste à puces",
ShowTableBorders	: "Afficher les bordures du tableau",
ShowDetails			: "Afficher les caractères invisibles",
Style				: "Style",
FontFormat			: "Format",
Font				: "Police",
FontSize			: "Taille",
TextColor			: "Couleur de caractère",
BGColor				: "Couleur de fond",
Source				: "Source",
Find				: "Chercher",
Replace				: "Remplacer",
SpellCheck			: "Orthographe",
UniversalKeyboard	: "Clavier universel",
PageBreakLbl		: "Saut de page",
PageBreak			: "Insérer un saut de page",

Form			: "Formulaire",
Checkbox		: "Case à cocher",
RadioButton		: "Bouton radio",
TextField		: "Champ texte",
Textarea		: "Zone de texte",
HiddenField		: "Champ caché",
Button			: "Bouton",
SelectionField	: "Liste/menu",
ImageButton		: "Bouton image",

FitWindow		: "Maximize the editor size",	//MISSING

// Context Menu
EditLink			: "Modifier le lien",
CellCM				: "Cell",	//MISSING
RowCM				: "Row",	//MISSING
ColumnCM			: "Column",	//MISSING
InsertRow			: "Insérer une ligne",
DeleteRows			: "Supprimer des lignes",
InsertColumn		: "Insérer une colonne",
DeleteColumns		: "Supprimer des colonnes",
InsertCell			: "Insérer une cellule",
DeleteCells			: "Supprimer des cellules",
MergeCells			: "Fusionner les cellules",
SplitCell			: "Scinder les cellules",
TableDelete			: "Supprimer le tableau",
CellProperties		: "Propriétés de cellule",
TableProperties		: "Propriétés du tableau",
ImageProperties		: "Propriétés de l'image",
FlashProperties		: "Propriétés de l'animation Flash",

AnchorProp			: "Propriétés de l'ancre",
ButtonProp			: "Propriétés du bouton",
CheckboxProp		: "Propriétés de la case à cocher",
HiddenFieldProp		: "Propriétés du champ caché",
RadioButtonProp		: "Propriétés du bouton radio",
ImageButtonProp		: "Propriétés du bouton image",
TextFieldProp		: "Propriétés du champ texte",
SelectionFieldProp	: "Propriétés de la liste/du menu",
TextareaProp		: "Propriétés de la zone de texte",
FormProp			: "Propriétés du formulaire",

FontFormats			: "Normal;Formaté;Adresse;Titre 1;Titre 2;Titre 3;Titre 4;Titre 5;Titre 6",

// Alerts and Messages
ProcessingXHTML		: "Calcul XHTML. Veuillez patienter...",
Done				: "Terminé",
PasteWordConfirm	: "Le texte à coller semble provenir de Word. Désirez-vous le nettoyer avant de coller?",
NotCompatiblePaste	: "Cette commande nécessite Internet Explorer version 5.5 minimum. Souhaitez-vous coller sans nettoyage?",
UnknownToolbarItem	: "Elément de barre d'outil inconnu \"%1\"",
UnknownCommand		: "Nom de commande inconnu \"%1\"",
NotImplemented		: "Commande non encore écrite",
UnknownToolbarSet	: "La barre d'outils \"%1\" n'existe pas",
NoActiveX			: "Les paramètres de sécurité de votre navigateur peuvent limiter quelques fonctionnalités de l'éditeur. Veuillez activer l'option \"Exécuter les contrôles ActiveX et les plug-ins\". Il se peut que vous rencontriez des erreurs et remarquiez quelques limitations.",
BrowseServerBlocked : "Le navigateur n'a pas pu être ouvert. Assurez-vous que les bloqueurs de popups soient désactivés.",
DialogBlocked		: "La fenêtre de dialogue n'a pas pu s'ouvrir. Assurez-vous que les bloqueurs de popups soient désactivés.",

// Dialogs
DlgBtnOK			: "OK",
DlgBtnCancel		: "Annuler",
DlgBtnClose			: "Fermer",
DlgBtnBrowseServer	: "Parcourir le serveur",
DlgAdvancedTag		: "Avancé",
DlgOpOther			: "<Autre>",
DlgInfoTab			: "Info",
DlgAlertUrl			: "Veuillez saisir l'URL",

// General Dialogs Labels
DlgGenNotSet		: "<Par défaut>",
DlgGenId			: "Id",
DlgGenLangDir		: "Sens d'écriture",
DlgGenLangDirLtr	: "De la gauche vers la droite (LTR)",
DlgGenLangDirRtl	: "De la roite vers la gauche (RTL)",
DlgGenLangCode		: "Code langue",
DlgGenAccessKey		: "Equivalent clavier",
DlgGenName			: "Nom",
DlgGenTabIndex		: "Ordre de tabulation",
DlgGenLongDescr		: "URL de description longue",
DlgGenClass			: "Classes de feuilles de style",
DlgGenTitle			: "Titre indicatif",
DlgGenContType		: "Type de contenu indicatif",
DlgGenLinkCharset	: "Encodage de caractère de la cible",
DlgGenStyle			: "Style",

// Image Dialog
DlgImgTitle			: "Propriétés de l'image",
DlgImgInfoTab		: "Informations sur l'image",
DlgImgBtnUpload		: "Envoyer sur le serveur",
DlgImgURL			: "URL",
DlgImgUpload		: "Télécharger",
DlgImgAlt			: "Texte de remplacement",
DlgImgWidth			: "Largeur",
DlgImgHeight		: "Hauteur",
DlgImgLockRatio		: "Garder les proportions",
DlgBtnResetSize		: "Taille originale",
DlgImgBorder		: "Bordure",
DlgImgHSpace		: "Espacement horizontal",
DlgImgVSpace		: "Espacement vertical",
DlgImgAlign			: "Alignement",
DlgImgAlignLeft		: "Gauche",
DlgImgAlignAbsBottom: "Abs Bas",
DlgImgAlignAbsMiddle: "Abs Milieu",
DlgImgAlignBaseline	: "Bas du texte",
DlgImgAlignBottom	: "Bas",
DlgImgAlignMiddle	: "Milieu",
DlgImgAlignRight	: "Droite",
DlgImgAlignTextTop	: "Haut du texte",
DlgImgAlignTop		: "Haut",
DlgImgPreview		: "Prévisualisation",
DlgImgAlertUrl		: "Veuillez saisir l'URL de l'image",
DlgImgLinkTab		: "Lien",

// Flash Dialog
DlgFlashTitle		: "Propriétés de l'animation Flash",
DlgFlashChkPlay		: "Lecture automatique",
DlgFlashChkLoop		: "Boucle",
DlgFlashChkMenu		: "Activer le menu Flash",
DlgFlashScale		: "Affichage",
DlgFlashScaleAll	: "Par défaut (tout montrer)",
DlgFlashScaleNoBorder	: "Sans bordure",
DlgFlashScaleFit	: "Ajuster aux dimensions",

// Link Dialog
DlgLnkWindowTitle	: "Propriétés du lien",
DlgLnkInfoTab		: "Informations sur le lien",
DlgLnkTargetTab		: "Destination",

DlgLnkType			: "Type de lien",
DlgLnkTypeURL		: "URL",
DlgLnkTypeAnchor	: "Ancre dans cette page",
DlgLnkTypeEMail		: "E-Mail",
DlgLnkProto			: "Protocole",
DlgLnkProtoOther	: "<autre>",
DlgLnkURL			: "URL",
DlgLnkAnchorSel		: "Sélectionner une ancre",
DlgLnkAnchorByName	: "Par nom d'ancre",
DlgLnkAnchorById	: "Par Id d'élément",
DlgLnkNoAnchors		: "<Pas d'ancre disponible dans le document>",
DlgLnkEMail			: "Adresse E-Mail",
DlgLnkEMailSubject	: "Sujet du message",
DlgLnkEMailBody		: "Corps du message",
DlgLnkUpload		: "Télécharger",
DlgLnkBtnUpload		: "Envoyer sur le serveur",

DlgLnkTarget		: "Destination",
DlgLnkTargetFrame	: "<cadre>",
DlgLnkTargetPopup	: "<fenêtre popup>",
DlgLnkTargetBlank	: "Nouvelle fenêtre (_blank)",
DlgLnkTargetParent	: "Fenêtre mère (_parent)",
DlgLnkTargetSelf	: "Même fenêtre (_self)",
DlgLnkTargetTop		: "Fenêtre supérieure (_top)",
DlgLnkTargetFrameName	: "Nom du cadre de destination",
DlgLnkPopWinName	: "Nom de la fenêtre popup",
DlgLnkPopWinFeat	: "Caractéristiques de la fenêtre popup",
DlgLnkPopResize		: "Taille modifiable",
DlgLnkPopLocation	: "Barre d'adresses",
DlgLnkPopMenu		: "Barre de menu",
DlgLnkPopScroll		: "Barres de défilement",
DlgLnkPopStatus		: "Barre d'état",
DlgLnkPopToolbar	: "Barre d'outils",
DlgLnkPopFullScrn	: "Plein écran (IE)",
DlgLnkPopDependent	: "Dépendante (Netscape)",
DlgLnkPopWidth		: "Largeur",
DlgLnkPopHeight		: "Hauteur",
DlgLnkPopLeft		: "Position à partir de la gauche",
DlgLnkPopTop		: "Position à partir du haut",

DlnLnkMsgNoUrl		: "Veuillez saisir l'URL",
DlnLnkMsgNoEMail	: "Veuillez saisir l'adresse e-mail",
DlnLnkMsgNoAnchor	: "Veuillez sélectionner une ancre",

// Color Dialog
DlgColorTitle		: "Sélectionner",
DlgColorBtnClear	: "Effacer",
DlgColorHighlight	: "Mettre en exergue",
DlgColorSelected	: "Sélectionné",

// Smiley Dialog
DlgSmileyTitle		: "Insérer un Smiley",

// Special Character Dialog
DlgSpecialCharTitle	: "Insérer un caractère spécial",

// Table Dialog
DlgTableTitle		: "Propriétés du tableau",
DlgTableRows		: "Lignes",
DlgTableColumns		: "Colonnes",
DlgTableBorder		: "Bordure",
DlgTableAlign		: "Alignement",
DlgTableAlignNotSet	: "<Par défaut>",
DlgTableAlignLeft	: "Gauche",
DlgTableAlignCenter	: "Centré",
DlgTableAlignRight	: "Droite",
DlgTableWidth		: "Largeur",
DlgTableWidthPx		: "pixels",
DlgTableWidthPc		: "pourcentage",
DlgTableHeight		: "Hauteur",
DlgTableCellSpace	: "Espacement",
DlgTableCellPad		: "Contour",
DlgTableCaption		: "Titre",
DlgTableSummary		: "Résumé",

// Table Cell Dialog
DlgCellTitle		: "Propriétés de la cellule",
DlgCellWidth		: "Largeur",
DlgCellWidthPx		: "pixels",
DlgCellWidthPc		: "pourcentage",
DlgCellHeight		: "Hauteur",
DlgCellWordWrap		: "Retour à la ligne",
DlgCellWordWrapNotSet	: "<Par défaut>",
DlgCellWordWrapYes	: "Oui",
DlgCellWordWrapNo	: "Non",
DlgCellHorAlign		: "Alignement horizontal",
DlgCellHorAlignNotSet	: "<Par défaut>",
DlgCellHorAlignLeft	: "Gauche",
DlgCellHorAlignCenter	: "Centré",
DlgCellHorAlignRight: "Droite",
DlgCellVerAlign		: "Alignement vertical",
DlgCellVerAlignNotSet	: "<Par défaut>",
DlgCellVerAlignTop	: "Haut",
DlgCellVerAlignMiddle	: "Milieu",
DlgCellVerAlignBottom	: "Bas",
DlgCellVerAlignBaseline	: "Bas du texte",
DlgCellRowSpan		: "Lignes fusionnées",
DlgCellCollSpan		: "Colonnes fusionnées",
DlgCellBackColor	: "Fond",
DlgCellBorderColor	: "Bordure",
DlgCellBtnSelect	: "Choisir...",

// Find Dialog
DlgFindTitle		: "Chercher",
DlgFindFindBtn		: "Chercher",
DlgFindNotFoundMsg	: "Le texte indiqué est introuvable.",

// Replace Dialog
DlgReplaceTitle			: "Remplacer",
DlgReplaceFindLbl		: "Rechercher:",
DlgReplaceReplaceLbl	: "Remplacer par:",
DlgReplaceCaseChk		: "Respecter la casse",
DlgReplaceReplaceBtn	: "Remplacer",
DlgReplaceReplAllBtn	: "Tout remplacer",
DlgReplaceWordChk		: "Mot entier",

// Paste Operations / Dialog
PasteErrorPaste	: "Les paramètres de sécurité de votre navigateur empêchent l'éditeur de coller automatiquement vos données. Veuillez utiliser les équivalents claviers (Ctrl+V).",
PasteErrorCut	: "Les paramètres de sécurité de votre navigateur empêchent l'éditeur de couper automatiquement vos données. Veuillez utiliser les équivalents claviers (Ctrl+X).",
PasteErrorCopy	: "Les paramètres de sécurité de votre navigateur empêchent l'éditeur de copier automatiquement vos données. Veuillez utiliser les équivalents claviers (Ctrl+C).",

PasteAsText		: "Coller comme texte",
PasteFromWord	: "Coller à partir de Word",

DlgPasteMsg2	: "Veuillez coller dans la zone ci-dessous en utilisant le clavier (<STRONG>Ctrl+V</STRONG>) et cliquez sur <STRONG>OK</STRONG>.",
DlgPasteIgnoreFont		: "Ignorer les polices de caractères",
DlgPasteRemoveStyles	: "Supprimer les styles",
DlgPasteCleanBox		: "Effacer le contenu",

// Color Picker
ColorAutomatic	: "Automatique",
ColorMoreColors	: "Plus de couleurs...",

// Document Properties
DocProps		: "Propriétés du document",

// Anchor Dialog
DlgAnchorTitle		: "Propriétés de l'ancre",
DlgAnchorName		: "Nom de l'ancre",
DlgAnchorErrorName	: "Veuillez saisir le nom de l'ancre",

// Speller Pages Dialog
DlgSpellNotInDic		: "Pas dans le dictionnaire",
DlgSpellChangeTo		: "Changer en",
DlgSpellBtnIgnore		: "Ignorer",
DlgSpellBtnIgnoreAll	: "Ignorer tout",
DlgSpellBtnReplace		: "Remplacer",
DlgSpellBtnReplaceAll	: "Remplacer tout",
DlgSpellBtnUndo			: "Annuler",
DlgSpellNoSuggestions	: "- Aucune suggestion -",
DlgSpellProgress		: "Vérification d'orthographe en cours...",
DlgSpellNoMispell		: "Vérification d'orthographe terminée: Aucune erreur trouvée",
DlgSpellNoChanges		: "Vérification d'orthographe terminée: Pas de modifications",
DlgSpellOneChange		: "Vérification d'orthographe terminée: Un mot modifié",
DlgSpellManyChanges		: "Vérification d'orthographe terminée: %1 mots modifiés",

IeSpellDownload			: "Le Correcteur n'est pas installé. Souhaitez-vous le télécharger maintenant?",

// Button Dialog
DlgButtonText	: "Texte (valeur)",
DlgButtonType	: "Type",

// Checkbox and Radio Button Dialogs
DlgCheckboxName		: "Nom",
DlgCheckboxValue	: "Valeur",
DlgCheckboxSelected	: "Sélectionné",

// Form Dialog
DlgFormName		: "Nom",
DlgFormAction	: "Action",
DlgFormMethod	: "Méthode",

// Select Field Dialog
DlgSelectName		: "Nom",
DlgSelectValue		: "Valeur",
DlgSelectSize		: "Taille",
DlgSelectLines		: "lignes",
DlgSelectChkMulti	: "Sélection multiple",
DlgSelectOpAvail	: "Options disponibles",
DlgSelectOpText		: "Texte",
DlgSelectOpValue	: "Valeur",
DlgSelectBtnAdd		: "Ajouter",
DlgSelectBtnModify	: "Modifier",
DlgSelectBtnUp		: "Monter",
DlgSelectBtnDown	: "Descendre",
DlgSelectBtnSetValue : "Valeur sélectionnée",
DlgSelectBtnDelete	: "Supprimer",

// Textarea Dialog
DlgTextareaName	: "Nom",
DlgTextareaCols	: "Colonnes",
DlgTextareaRows	: "Lignes",

// Text Field Dialog
DlgTextName			: "Nom",
DlgTextValue		: "Valeur",
DlgTextCharWidth	: "Largeur en caractères",
DlgTextMaxChars		: "Nombre maximum de caractères",
DlgTextType			: "Type",
DlgTextTypeText		: "Texte",
DlgTextTypePass		: "Mot de passe",

// Hidden Field Dialog
DlgHiddenName	: "Nom",
DlgHiddenValue	: "Valeur",

// Bulleted List Dialog
BulletedListProp	: "Propriétés de liste à puces",
NumberedListProp	: "Propriétés de numérotée",
DlgLstType			: "Type",
DlgLstTypeCircle	: "Cercle",
DlgLstTypeDisc		: "Disque",
DlgLstTypeSquare	: "Carré",
DlgLstTypeNumbers	: "Nombres (1, 2, 3)",
DlgLstTypeLCase		: "Lettres minuscules (a, b, c)",
DlgLstTypeUCase		: "Lettres majuscules (A, B, C)",
DlgLstTypeSRoman	: "Chiffres romains minuscules (i, ii, iii)",
DlgLstTypeLRoman	: "Chiffres romains majuscules (I, II, III)",

// Document Properties Dialog
DlgDocGeneralTab	: "Général",
DlgDocBackTab		: "Fond",
DlgDocColorsTab		: "Couleurs et marges",
DlgDocMetaTab		: "Métadonnées",

DlgDocPageTitle		: "Titre de la page",
DlgDocLangDir		: "Sens d'écriture",
DlgDocLangDirLTR	: "De la gauche vers la droite (LTR)",
DlgDocLangDirRTL	: "De la droite vers la gauche (RTL)",
DlgDocLangCode		: "Code langue",
DlgDocCharSet		: "Encodage de caractère",
DlgDocCharSetOther	: "Autre encodage de caractère",

DlgDocDocType		: "Type de document",
DlgDocDocTypeOther	: "Autre type de document",
DlgDocIncXHTML		: "Inclure les déclarations XHTML",
DlgDocBgColor		: "Couleur de fond",
DlgDocBgImage		: "Image de fond",
DlgDocBgNoScroll	: "Image fixe sans défilement",
DlgDocCText			: "Texte",
DlgDocCLink			: "Lien",
DlgDocCVisited		: "Lien visité",
DlgDocCActive		: "Lien activé",
DlgDocMargins		: "Marges",
DlgDocMaTop			: "Haut",
DlgDocMaLeft		: "Gauche",
DlgDocMaRight		: "Droite",
DlgDocMaBottom		: "Bas",
DlgDocMeIndex		: "Mots-clés (séparés par des virgules)",
DlgDocMeDescr		: "Description",
DlgDocMeAuthor		: "Auteur",
DlgDocMeCopy		: "Copyright",
DlgDocPreview		: "Prévisualisation",

// Templates Dialog
Templates			: "Modèles",
DlgTemplatesTitle	: "Modèles de contenu",
DlgTemplatesSelMsg	: "Veuillez sélectionner le modèle à ouvrir dans l'éditeur<br>(le contenu actuel sera remplacé):",
DlgTemplatesLoading	: "Chargement de la liste des modèles. Veuillez patienter...",
DlgTemplatesNoTpl	: "(Aucun modèle disponible)",

// About Dialog
DlgAboutAboutTab	: "A propos de",
DlgAboutBrowserInfoTab	: "Navigateur",
DlgAboutLicenseTab	: "License",	//MISSING
DlgAboutVersion		: "version",
DlgAboutLicense		: "License selon les termes de GNU Lesser General Public License",
DlgAboutInfo		: "Pour plus d'informations, aller à"
}