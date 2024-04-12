<?php
require 'config.php';
require 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dream Home Customers List</title>
<!--

Template 2084 Zipper

http://www.tooplate.com/view/2084-zipper

-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/tooplate-style.css">
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
      
        
          <script type="text/javascript">
function checkValueForm()
  {
    var fname=document.form_1.fname.value;
    var lname=document.form_1.lname.value;
    //alert(fname);
    //alert(lname);
    if(!/^[A-z ]+$/.test(fname))
    {
      document.getElementById("fname").focus();
      document.getElementById("fname").value="";
      return false;
    }
    else if(!/^[A-z ]+$/.test(lname))
    {
      document.getElementById("lname").focus();
      document.getElementById("lname").value="";
      return false;
    }
  }

  function checkValueForm1()
  {
    var ffname=document.form_2.ffname.value;
    var llname=document.form_2.llname.value;
    //alert(fname);
    //alert(lname);
    if(!/^[A-z ]+$/.test(ffname))
    {
      document.getElementById("ffname").focus();
      document.getElementById("ffname").value="";
      return false;
    }
    else if(!/^[A-z ]+$/.test(llname))
    {
      document.getElementById("llname").focus();
      document.getElementById("llname").value="";
      return false;
    }
  }
  function validateform()
  {
    //alert("hi");
    var name=document.ContactForm.contact_name.value;
    if(!/^[A-z ]+$/.test(name))
        {
          document.getElementById("contact_name").focus();
          document.getElementById("contact_name").value="";
          /*document.getElementById("nameError").innerHTML="Please enter only Character";
          document.getElementById("nameError1").style.display = "block";*/
          return false;
        }
  }
</script>
</head>

    <body>
	
	
	<div id="google_translate_element"></div>
 
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                {pageLanguage: 'en'},
                'google_translate_element'
            );
        }
    </script>
 
    <script type="text/javascript"
            src=
"https://translate.google.com/translate_a/element.js?
cb=googleTranslateElementInit">
    </script>
 

	
	
	
	
	

        <div class="container-fluid">
            <!-- Navigation -->        
            <div class="tm-nav" style="float: left;">
            		<div class="col-lg-12">
                    <button  class="tm-submit-btn" style="float: left;color: white;margin-top: 20px;" onclick="abc();"><a href="contact.php" style="color: black;">Back</a></button>
                     
                </div>
            </div>

            <section class="tm-section tm-section-home tm-flex-center" id="home" >                
                
               
                    <div class="row" >
                    	<div class="col-lg-12" style="margin-left: 10px;">
                        <h1 style="float: left;color: magenta;">Dream Home Customers List</h1>
                    </div>
                         <table style="border: 1px solid;width: 90%;margin-left: 40px; ">
            	<tr style="border: 1px solid ">
            		<th style="border: 1px solid;font-size: 15px;color: magenta; "><b>Sr.No.<b></th>
               		<th style="border: 1px solid;font-size: 15px; color: magenta;">Name</th>
            		<th style="border: 1px solid;font-size: 15px; color: magenta;">Mobile Number</th>
            		<th style="border: 1px solid;font-size: 15px; color: magenta;">Email</th>
            		<th style="border: 1px solid;font-size: 15px;color: magenta; ">Property name</th>   
					<!--<th style="border: 1px solid;font-size: 15px;color: magenta; ">Location name</th>-->         		
            		<th style="border: 1px solid;font-size: 15px;color: magenta; ">Message</th>
            		
            	</tr>
            	<tbody style="border: 1px solid ">
            		<?php
            		$i=0;
            		$selectSql=mysqli_query($link,"SELECT * FROM `dreamhome_datails` WHERE 1");
            		if(mysqli_num_rows($selectSql)>0)
            		{
            			while($row=mysqli_fetch_assoc($selectSql))
            			{  
            				$i++;
            				?>
            				<tr style="border: 1px solid ">
            					<td style="border: 1px solid;color: Black; "><center><?php echo $i; ?></center></td>		            			
		            			<td style="border: 1px solid;color: Black; "><center><?php echo $row['first_name'].' '.$row['last_name']; ?></center></td>
		            			<td style="border: 1px solid;color: Black; "><center><?php echo $row['mobile_no']; ?></center></td>
		            			<td style="border: 1px solid;color: Black; "><center><?php echo $row['email'];?></center></td>		    		
		            			<td style="border: 1px solid;color: Black; "><center><?php echo $row['property_list'];?></center></td>
								<!--<td style="border: 1px solid;color: Black; "><center><?php echo $row['location_list'];?></center></td>-->
		            			<td style="border: 1px solid;color: Black; "><center><?php echo $row['message'];?></center></td>
							</tr>
            		<?php
            			}
            		}
            		?>
            		
            	</tbody>
            </table>
                    </div>
                            

            </section>

                </div>               
        
        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>         <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) -->
        <script src="js/bootstrap.min.js"></script>             <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
        <script src="js/jquery.singlePageNav.min.js"></script>  <!-- Single page nav (https://github.com/ChrisWojcik/single-page-nav) -->
        <script src="js/js/datepicker/daterangepicker.js"></script>
        
            
          
             
           <script>
            $('#date1').daterangepicker({
          singleDatePicker: true,
          showDropdowns: true,
          format: 'DD-MM-YYYY',
          calender_style: "picker_3"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
        
        </script>
        <script >
            function checkScrollPosition() {
                
                if($(window).width() < 767) {
                    $(".tm-nav").removeClass("scroll");
                    return;
                }

                if($(window).scrollTop() > 50) {
                  $(".tm-nav").addClass("scroll");
              } else {        
                  $(".tm-nav").removeClass("scroll");
              }
            }

            $(document).ready(function () {   
                // Single page nav
                $('.tm-nav').singlePageNav({
                    offset: 57,
                    filter: ':not(.external)',
                    updateHash: true        
                });

                checkScrollPosition();

                // navbar
                $('.navbar-toggle').click(function(){
                    $('.main-menu').toggleClass('show');
                });

                $('.main-menu a').click(function(){
                    $('.main-menu').removeClass('show');
                });
            });

            $(window).on("scroll", function() {
                checkScrollPosition();    
            });

            $('#tmNavbar a').click(function(){
                $('#tmNavbar').collapse('hide');
            });

            function abc()
            {
            	//alert("in fn");
            	window.location.href="index.php";
            }

        </script>             

</body>
</html>