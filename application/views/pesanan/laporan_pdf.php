<html>
    <head>
        <style>
		  body{
			font-family: Arial, Helvetica, sans-serif;
		  }
            @page {
                margin: 100px 25px;
            }

            header {
                position: fixed;
                top: -60px;
                left: 0px;
                right: 0px;
                height: 50px;

                /** Extra personal styles **/
                /* background-color: #03a9f4; */
                color: black;
                text-align: left;
                line-height: 35px;
            }

            footer {
                position: fixed; 
                bottom: -60px; 
                left: 0px; 
                right: 0px;
                height: 50px; 

                /** Extra personal styles **/
                background-color: #03a9f4;
                color: white;
                text-align: center;
                line-height: 35px;
            }
		.pull-right{
			position: fixed;
                top: -60px;
                left: 0px;
                right: 0px;
                height: 50px;

                /** Extra personal styles **/
                /* background-color: #03a9f4; */
                color: black;
                text-align: right;
                line-height: 35px;
		  }
		  .pull-left{
			position: fixed;
                top: -60px;
                left: 0px;
                right: 0px;
                height: 50px;

                /** Extra personal styles **/
                /* background-color: #03a9f4; */
                color: black;
                text-align: left;
                line-height: 35px;
		  }
        </style>
    </head>
    <body>
        <!-- Define header and footer blocks before your content -->
		<header>
			<div class="row">
				<div class="col-xs-12">
					<h2>
						<small class="pull-left">Amanah Collection</small>	
					</h2>				
					<small class="pull-right">Date: <?= date('d-M-Y') ?></small>	
					<hr style="margin-top:10px">	
				</div>
			</div>
		</header>

        <footer>
            Copyright &copy; <?php echo date("Y");?> 
        </footer>

        <!-- Wrap the content of your PDF inside a main tag -->
        <main>
	   <div class="content-wrapper">	
	    <!-- Main content -->
	    <section class="invoice">
		 <!-- title row -->
		 <div class="row">
		   <div class="col-xs-12">
			
		   </div>
		   <!-- /.col -->
		 </div>
		 <!-- info row -->
		 <div class="row">
		   <div class="col-xs-12 table-responsive">
			<table class="table table-striped">
			<thead>
				<td>
					<div class="col-sm-4 invoice-col">
						From
						<address>
						<strong><?=$get_pesanan['nama_pegawai']?></strong><br>
						795 Folsom Ave, Suite 600<br>
						San Francisco, CA 94107<br>
						Phone: (804) 123-5432<br>
						Email: info@almasaeedstudio.com
						</address>
					</div>
				</td>
				
				<td>
					<!-- /.col -->
					<div class="col-sm-4 invoice-col">
						To
						<address>
						<strong><?=$get_pesanan['nama_costumer'] ?></strong><br>
						795 Folsom Ave, Suite 600<br>
						San Francisco, CA 94107<br>
						Phone: (555) 539-1037<br>
						Email: john.doe@example.com
						</address>
					</div>
				</td>
				<td>

					<div class="col-sm-4 invoice-col">
						<b>Invoice #007612</b><br>
						<br>
						<b>Order ID:</b> 4F3S8J<br>
						<b>Payment Due:</b> 2/22/2014<br>
						<b>Account:</b> 968-34567
					</div>
				</td>
			</thead>
					
				</div>
			</table>
		   </div>
		 </div>
	
		
			<!-- Table row -->
			<div class="row">
			<div class="col-xs-12 table-responsive">
				<table class="table table-striped">
				<thead>
				<tr>
				<th>Qty</th>
				<th>Product</th>
				<th>Serial #</th>
				<th>Description</th>
				<th>Subtotal</th>
				</tr>
				</thead>
				<tbody>
				<tr>
				<td>1</td>
				<td>Call of Duty</td>
				<td>455-981-221</td>
				<td>El snort testosterone trophy driving gloves handsome</td>
				<td>$64.50</td>
				</tr>
				<tr>
				<td>1</td>
				<td>Need for Speed IV</td>
				<td>247-925-726</td>
				<td>Wes Anderson umami biodiesel</td>
				<td>$50.00</td>
				</tr>
				<tr>
				<td>1</td>
				<td>Monsters DVD</td>
				<td>735-845-642</td>
				<td>Terry Richardson helvetica tousled street art master</td>
				<td>$10.70</td>
				</tr>
				<tr>
				<td>1</td>
				<td>Grown Ups Blue Ray</td>
				<td>422-568-642</td>
				<td>Tousled lomo letterpress</td>
				<td>$25.99</td>
				</tr>
				</tbody>
				</table>
			</div>
			<!-- /.col -->
			</div>
			<!-- /.row -->
		
		 <div class="row">		   <!-- /.col -->
		   <div class="col-xs-6">
			<p class="lead">Amount Due 2/22/2014</p>
	
			<div class="table-responsive">
			  <table class="table">
			    <tr>
				 <th style="width:50%">Subtotal:</th>
				 <td>$250.30</td>
			    </tr>
			    <tr>
				 <th>Tax (9.3%)</th>
				 <td>$10.34</td>
			    </tr>
			    <tr>
				 <th>Shipping:</th>
				 <td>$5.80</td>
			    </tr>
			    <tr>
				 <th>Total:</th>
				 <td>$265.24</td>
			    </tr>
			  </table>
			</div>
		   </div>
		   <!-- /.col -->
		 </div>
		 <!-- /.row -->
	</div>
        </main>
    </body>
</html>

	
