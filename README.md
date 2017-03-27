Develop by Dwi Fajar Saputra (dfsptra@gmail.com) 

Management Event Slims7 Plugin

###########################################################
A. How To Install
###########################################################

1. Import file "event.sql" ke database (Menambahkan tabel event)

2. Pindahkan file tambahan :

- db_widget.inc.php					= slims7/ (memerlukan konfigurasi akses ke database sesuai dengan user akses database)
- contents/agenda.inc.php			= slims7/lib/contents/
- contents/get-jadwal-agenda.php	= slims7/lib/contents/
- css/fullcalendar.css				= slims7/ (jika belum ada folder "css" buat dulu)
- js/fullcalendar.min.js			= slims7/js
- js/moment.min.js					= slims7/js
- system/agenda.php					= slims7/admin/modules/system/

#Dibawah ini file yang sudah ada pada slims7, tetapi perlu ada pembaruan.
#Apabila anda pernah melakukan pembaruan pada ke 2 file ini direkomendasikan untuk mem-backup file yang berjalan sekarang.

- system/submenu.php				= slims7/admin/modules/system/ (Penambahan menu "Management Event")
- template default/index_template.inc.php	= slims7/template/default/ (Penambahan link css dan js, penambahan menu "Agenda", penambahan tampilan blok agenda dan penghilangan sidebar apabila jendela agenda aktif)


###########################################################
B. What's Update
###########################################################

==============
1. submenu.php
==============

//Put it in menu list (remove this row)
//Event Menu
$menu[] = array(__('Management Events'), MWB.'system/agenda.php', __('Management Events'));

=========================
2. index_template.inc.php
=========================

//Menu List (Line 49)
/*----------------------------------------------------
  menu list
  you may modified as you need
  ----------------------------------------------------*/

$menus = array (
    'home'   => array('url'  => 'index.php',
      'text' => __('Home')
      ),
    'libinfo'  => array('url'  => 'index.php?p=libinfo',
      'text' => __('Library Information')
      ),
    'member'   => array('url'  => 'index.php?p=member',
      'text' => __('Member Area')
      ),
    'librarian'   => array('url'  => 'index.php?p=librarian',
      'text' => __('Librarian')
      ),
    'agenda'  => array('url'  => 'index.php?p=agenda',
	  'text' => __('Event')
	  ),
    'help'   => array('url'  => 'index.php?p=help',
      'text' => __('Help on Search')
      ),
    'login'   => array('url'  => 'index.php?p=login',
      'text' => __('Librarian LOGIN')
      )
    );
    
//Call fullcalender CSS (Line 114)
<link type="text/css" rel="stylesheet" media="all" href="<?php echo SWB; ?>css/fullcalendar.css"/>

//Call fullcalender JS (Line 119)
<script type="text/javascript" src="<?php echo JWB; ?>moment.min.js"></script>
<script type="text/javascript" src="<?php echo JWB; ?>fullcalendar.min.js"></script>

// Make block event bigger (Line 180)
<?php if(isset($_GET['p']) AND $_GET['p'] == 'agenda') { ?>
		<div class="span12">
		 <?php } else { ?>
        <div class="span8">
		 <?php } ?>
		 
// Hide sidebar if event window active(Line 298)
<?php if(isset($_GET['p']) AND $_GET['p'] == 'agenda') { ?>
		<?php } else { ?>
        <div class="span4">
        
        
 <?php } ?> <!-- End if agenda sidebar || in Line 351 After closed span 4-->
