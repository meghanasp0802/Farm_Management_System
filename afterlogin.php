<!DOCTYPE html>
 
<html>
 
<head>
    <title>FARM MANAGEMENT SYSTEM</title>
 
    <style>
	body
{
  font-family:sans-serif;
  /*background: -webkit-linear-gradient(to right, #155799, #159957); */ 
  background: linear-gradient(to right, #155799, #159957);
  color:whitesmoke;
  

}
img{
opacity:0.5;
}
        * {
            margin: 0;
            padding: 0;
        }
 
        .navbar {
            display: flex;
            align-items: center;
            justify-content: center;
            position: sticky;
            top: 0;
            cursor: pointer;
        }
 
        
 
        .nav-list {
            width: 70%;
            display: flex;
            align-items: center;
        }
 
        .logo {
            display: flex;
            justify-content: center;
            align-items: center;
        }
 
        .logo img {
            width: 180px;
            border-radius: 50px;
        }
 
        .nav-list li {
            list-style: none;
            padding: 26px 30px;
        }
 
        .nav-list li a {
            text-decoration: none;
            color: white;
        }
 
        .nav-list li a:hover {
            color: grey;
        }
 
        .rightnav {
            width: 30%;
            text-align: right;
        }
 
        #search {
            padding: 5px;
            font-size: 17px;
            border: 2px solid grey;
            border-radius: 9px;
        }
 
        .firstsection {
        background-color: black;
		background-image: url('farm.webp');
		background-repeat: no-repeat;
		background-size: cover;
		
           height: 485px;
           position: relative; 
           isolation:isolate;
		/* opacity:0.8; */
        }
        .firstsection::after{
            content: '';
            position: absolute;
            z-index:-1;
            background: white;
            inset:0;
            opacity:.3;
        }
	
 
        .secondsection {
            background-color: skyblue;
            height: 400px;
        }
 
        .box-main {
            display: flex;
            justify-content: center;
            align-items: center;
            color: black;
            max-width: 80%;
            margin: auto;
            height: 100%;
        }
 
        .firsthalf {
            width: 100%;
            display: flex;
		/* filter: blur(0px); */
            flex-direction: column;
            justify-content: center;
            
        }

 
        .secondhalf {
            width: 30%;
        }
 
        .secondhalf img {
            width: 70%;
            border: 4px solid white;
            border-radius: 150px;
            display: block;
            margin: auto;
        }
 
        .text-big {
            font-family: 'Piazzolla', serif;
            font-weight: bold;
            font-size: 35px;
        }
 
        .text-small {
            font-size: 18px;
        }
 
        .btn {
            padding: 8px 20px;
            margin: 7px 0;
            border: 2px solid white;
            border-radius: 8px;
            background: none;
            color: white;
            cursor: pointer;
        }
 
        .btn-sm {
            padding: 6px 10px;
            vertical-align: middle;
        }
 
        .section {
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 90%;
            margin: auto;
        }
 
        .section-Left {
            flex-direction: row-reverse;
        }
 
        .paras {
            padding: 0px 65px;
        }
 
        .thumbnail img {
            width: 250px;
            border: 2px solid white;
            border-radius: 26px;
            margin-top: 19px;
        }
 
        .center {
            text-align: center;
        }
 
        .text-footer {
            text-align: center;
            padding: 15px 0;
            font-family: 'Ubuntu', sans-serif;
            display: flex;
            justify-content: center;
            color: white;
            /* background: linear-gradient(to right, #155799, #159957); */
            
        }
    </style>
</head>
 
<body>
    <nav class="navbar background">
        <ul class="nav-list">
            
        <li><a href="#web">HOME</a></li>
        
		
		<!--<li><a href="role.php">ROLE</a></li>-->
		<li><a href="employ.php">EMPLOYEE</a></li>
		<li><a href="crop.php">CROPS</a></li>
		<li><a href="fertilizer.php">FERTILIZERS</a></li>
            
            <li><a href="firsthome.html">LOG OUT</a></li>
        </ul>
 
        
    </nav>
 
    <section class="firstsection">
        <div class="box-main">
            <div class="firstHalf">
                <h1 class="text-big" id="web">FARM MANAGEMENT SYSTEM</h1>
                <p class="text-small"><b>
                    The main objective of the Farm Management System is to manage the details of Fertilizers, Insecticides, Pesticides, Employees and availability of crops in a particular season. It manages all the information about Fertilizers, Insecticides, Pesticides, Employees and availability of crops in a particular season. The project is totally built at administrative end and thus only the administrator is guaranteed the access. The purpose of the project is to build an application program to reduce the manual work for managing the Medicines, Treatments, Growth, Crops. It tracks all the details about the Crops, Farm, and Employees
                </b></p>
 
 
            </div>
        </div>
    </section>
 
   
 
       
 
    <footer class="background">
        <p class="text-footer">
            EXPLORE THE NEW WAY OF TRADING....
        </p>
 
 
    </footer>

</body>
 
</html>