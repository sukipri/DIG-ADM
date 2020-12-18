	<table width="100%" border="0" class="">
          <tr>
            <td width="17%" valign="top">
             <!-- -->
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item">
                        <a class="nav-link bg-default active btn-primary"><i class="fas fa-window-maximize"></i>&nbsp;MASTER</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Set Up</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="<?php echo"?PG_SA=DA_KODE_01"; ?>">Kode data</a>
                          <a class="dropdown-item" href="<?PHP echo"?PG_SA=DA_USER_01"; ?>">Admin & Customer</a>
                          <a class="dropdown-item" href="<?PHP echo"?PG_SA=DA_BRG_01"; ?>">Barang</a>
                           <a class="dropdown-item" href="<?PHP echo"?PG_SA=DA_PJL_01"; ?>">Penjualan</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </li>
                      
                      <!-- -->
                       <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">APP</a>
                        <div class="dropdown-menu">
                        	<a class="dropdown-item" href="<?PHP echo"?PG_SA=DA_POS_01"; ?>">POS(Point Of Sales)</a>
                        </div>
                      </li>
                      <!-- -->
                      <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                      </li>
                </ul>
   
            </td>
            <td width="83%" valign="top">
            
            <?php include"../LOGIC/PG/PG_SA.php"; ?>
            </td>
          </tr>
	</table>

   
	

    	
