<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
         <div class="col-lg-12 ml-1  text-light text-center"> 

            <?php
            $log=$path."images/logo.png";
            echo '<img class="w-100" src='.$log.' alt="logo"/>';
            ?>         
			
	        </div>
        </div>  
      </div>

	 <?php
        
          
	    	  $rech=$path.'app/recherche/index.php';
 		
  	?>
      <div class="navbar-menu-wrapper  d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
          <form method="GET" action="<?php print $rech; ?>" >
            <div class="input-group">
              
              <input type="text" name='q' class="form-control" placeholder="Recherche" aria-label="search" aria-describedby="search">

            	<div class="input-group-prepend">
                <span class="input-group-text" >
		
		              <?php echo ' <input type="image" src="'.$path.'images/search.png" alt="Submit" width="18" height="18">'; ?>

                </span>
              </div>
            </div>
          	</form>
            </li>

          
          

        </ul>



        <ul class="navbar-nav navbar-nav-right">

        <?php

if (isset($_COOKIE["langue"])) {

  echo "<li class='nav-item dropdown no-arrow mx-1'>
  <a class='h6 bg bg-warning text-white  ' href='".$path."page/lang_supp.php'   role='button' role='button' title='Langue Française'  >
  <b>Fr</b>
   <i class='mdi mdi-keyboard-variant h3'></i>

  
  </a></li>
  ";

} else {
  
echo "<li class='nav-item dropdown no-arrow mx-1'>
<a class='h5 bg bg-warning text-white  ' href='".$path."page/lang.php'   role='button' title='لغة العربية' >
<b>ع</b> 
<i class='mdi mdi-keyboard-variant h3'></i>
  

</a></li>
";

}

?>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
