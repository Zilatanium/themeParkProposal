<!DOCTYPE html>
<html>
<head>
	<title>Joseph's Proposal</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>
</head>
<body>
	<div class="wrapper">
		<section>
			<header> Joseph's Proposal </header>
				<div class="content">
				Date of this page's last revision: 10/14/2022.
				</div>
                <div class="content">
				<?php
                date_default_timezone_set("America/New_York");
                echo "Today is " .date("m/d/y"), ", with the time of: ".date("h:i:sa"), "."
                 ?>
				</div>
                <div class="content">
				Proposed Theme: PC builds
				</div>
                <div class="content">
				This theme will be focus on PC builds, specifically on the specifications of it.
                There are many types of computer with very different hardware for different uses.
                People have a certain budget they want to spend so they do not go overkill for 
                their work-case uses. This theme will have a certain amount of PC builds that people 
                can use for building their specs-for-them computer.

				</div>
                <div class="content">
				Team Member's Team Parks: 
                <br/> Aaron - Link
                <br/> Felix - Link
                <br/> Sam - Link
                <br/> Maxwell - Link
				</div>
                <div class="content">
                    Example:
                    <br/> <img src="pc_build.png">
                </div>
                <div class="content">
                    <button class="button-9" id="toggle">YouTube Video</button>
                    <iframe id="first" src="https://www.youtube.com/embed/QNakbNjdrjk" frameborder="0" allowfullscreen></iframe>
                    <button class="button-9" id="toggle2" >Example Table</button>
                    <div id="second">
                        <table style="width:100%">
                            <tr>
                                <th>Budget</th>
                                <th>CPU</th>
                                <th>GPU</th>
                                <th>Ram</th>
                                <th>Storage</th>
                            </tr>
                            <tr>
                                <th>1000</th>
                                <th>Ryzen 5600x</th>
                                <th>RTX 2070</th>
                                <th>Trident 3600</th>
                                <th>SSD</th>
                            </tr>
                            <tr>
                                <th>1500</th>
                                <th>Intel i9</th>
                                <th>3070</th>
                                <th>Trident 4500</th>
                                <th>NVME M.2 SSD</th>
                            </tr>
                            </table> 
                    </div>
                </div>
		</section>
	</div>
    <script>
        const targetDiv = document.getElementById("first");
        const btn = document.getElementById("toggle");
        targetDiv.style.display = "none";
        btn.onclick = function () {
        if (targetDiv.style.display !== "none") {
            targetDiv.style.display = "none";
        } else {
            targetDiv.style.display = "block";
        }
        };

        const targetDiv2 = document.getElementById("second");
        const btn2 = document.getElementById("toggle2");
        targetDiv2.style.display = "none";
        btn2.onclick = function () {
        if (targetDiv2.style.display !== "none") {
            targetDiv2.style.display = "none";
        } else {
            targetDiv2.style.display = "block";
        }
        };
   </script>
</body>
</html>