
<div id="sidebar" class="sidebar">
	<div data-scrollbar="true" data-height="100%">
		<ul class="nav">
			<li class="nav-profile">
				<a href="javascript:;" data-toggle="nav-profile">
					<div class="cover with-shadow"></div>
						<div class="image">
							<img src="<?php echo base_url('assets/upload/image/'.$this->session->userdata('gambar')); ?>" class="gritter-image" />
						</div>
						<div class="info">
							<b class="caret"></b>
							<?php echo $this->session->userdata('nama');?><br>	
						</div>
				</a>
			</li>
			<li>
				<ul class="nav nav-profile">
					<li><a href="<?php echo base_url();?>pegawai/profile"><i class="ion-ios-cog"></i>Profile</a></li>
				</ul>
			</li>
		</ul>
		
		<ul class="nav">
			<li>
				<a href='<?php echo base_url()?>dashboard'><i class="material-icons">home</i><span>Dashboard</span></a>
			</li>
			
			<?php
				$mainmenu=$this->db->get_where('mainmenu',array('aktif'=>'1','level'=>$this->session->userdata('level')))->result();
				foreach ($mainmenu as $m)
				{
				// chek sub menu
				$submenu=$this->db->get_where('submenu',array('id_mainmenu'=>$m->id_mainmenu,'aktif'=>'1','level'=>$this->session->userdata('level')));
				if($submenu->num_rows()>0)
				{
				//looping
				echo "
					<li class='has-sub'>
						
						<a href='javascript:;' class='has-sub'> <i class='material-icons'>".$m->icon."</i> ".$m->nama_mainmenu."</a>
							<ul class='sub-menu'>";
								foreach ($submenu->result() as $s)
								{
									echo "<li>".  anchor($s->link,  '<i class="'.$s->icon.'"></i> '.$s->nama_submenu)."</li>";
								}
								echo"
							</ul>
							
					 </li>";
						   // end looping
						 }
						 else
						{
						 echo "<li>"."<a "   .  anchor($m->link,  '<i class="material-icons">'.$m->icon.'</i> '.$m->nama_mainmenu)."</a>"."</li>";
							}
						 }
					?>
					 <?php
						 if($this->session->userdata('level')==1)
							{   
						?>    
								
						<?php } ?>		
			</ul>
	</div>
</div>