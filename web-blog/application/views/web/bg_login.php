   <div data-role="collapsible" data-theme="b" data-collapsed="true">
    		 	<h3>Login Sistem</h3>
  	<!--<?php echo "Selamat Datang di Sistem KRS Online STMIK Palangkaraya versi mobile"?>-->
   	<form method="post" action="<?php echo base_url(); ?>krs_mobile/loginact">
		<div data-role="fieldcontain">
		<label for="name">Username :</label>
		<input type="text" name="username" id="name"  />
    	<label for="password">Password :</label>
    	<input type="password" name="password" id="password" />
		<fieldset class="ui-grid-a">
		<div class="ui-block-a"><input type="submit" value="Masuk" data-icon="check" data-theme="b"></div>
		<div class="ui-block-b"><input type="reset" value="Hapus" data-icon="delete" data-theme="c"></div>	   
	</fieldset>
		
		</div>	
	</form>
	<ul data-role="listview" data-inset="true" data-theme="b" data-dividertheme="b"> 
			<li data-role="list-divider">Informasi Pengunjung</li> 
			<li>Browser  : <? echo $this->agent->browser().' '.$this->agent->version(); ?></li> 
			<li>Platform : <? echo $this->agent->platform();?></li>
			<li data-role="list-divider"></li>
	</ul> 
   </div>

