<div class="contents animate " id="dp_dash">
    <div class="welcome">
        <div class="name_n_icons">        
            <h2>Welcome back  <?php if(isset($_SESSION['fullnames'])){
                $salute = "";
                if($_SESSION['gen']=='M'){
                    $salute = 'Mr. ';
                }elseif ($_SESSION['gen'] == 'F') {
                    $salute = 'Mrs. ';
                }else{
                    $salute = "";
                }
                $named = explode(" ",$_SESSION['fullnames']);
                echo $salute.$named[0];
            }else {
                            echo "Username ";
                        }?> </h2>
            <span><img class="images" src="images/dp.png" id="dp_dash_dp" alt="userimg"></span>
        </div>

        <div class="contedd">
            <p>You are logged in as <?php 
                        if(isset($_SESSION['auth'])){
                            $authority = $_SESSION['auth'];
                        $data ="";
                        if($authority==0){
                            $data.="<b>admin</b></p>";
                        }elseif ($authority==1) {
                            $data.="<b> Headteacher</b></p>";
                        }elseif ($authority ==2) {
                            $data.="<b> Teacher</b></p>";
                        }elseif ($authority == 3) {
                            $data.="<b> Deputy principal</b></p>";
                        }elseif ($authority == 4) {
                            $data.="<b> Staff</b></p>";
                        }elseif ($authority == 5) {
                            $data.="<b> Class teacher</b></p>";
                        }elseif ($authority == 6) {
                            $data.="<b> Student</b></p>";
                        }
                        echo $data;}else{
                            echo "Login to proceed";
                        }?></p>
            <p>Welcome to your dashboard <br>Use the navigation bar on your left to select a task you want to carry out!</p>
            <p>Below I have summarized infomation of what you might need updates</p>
        </div>
    </div>
    <div class="cardholder">
        <div class="cards">
            <div class="conted">
                <p><strong>Total number of students:</strong></p>
            </div>
            <div class="conted">
                <p id="studentscount">0 student(s)</p>
            </div>    
            <div class="conted">
                <p><a href="#" id='totalstuds'>More..</a></p>
            </div>    
        </div>
        <div class="cards">
            <div class="conted">
                <p><strong>Number of students registered today:</strong></p>
            </div>
            <div class="conted">
                <p id = "studentscounttoday">0 Student(s) </p>
            </div>    
            <div class="conted">
                <p><a href="#" id='regtoday'>More..</a></p>
            </div>    
        </div>
        <div class="cards">
            <div class="conted">
                <p><strong> Number of students present in school today(Roll call):</strong></p>
            </div>
            <div class="conted">
                <p id ="studpresenttoday">0 student(s)</p>
            </div>    
            <div class="conted">
                <p><a href="#" id='prestoday' >More..</a></p>
            </div>    
        </div>
        <div class="cards">
            <div class="conted">
                <p><strong>Students absent</strong></p>
            </div>
            <div class="conted">
                <p id ='absentstuds'>0 Student(s)</p>
            </div>    
            <div class="conted">
                <p><a href="#regs" id='studentabs'>More..</a></p>
            </div>    
        </div>
        <div class="cards">
            <div class="conted">
                <p><strong>Active users now: </strong></p>
            </div>
            <div class="conted">
                <p id="activeusers">0 User(s)</p>
            </div>
            <div class="conted"> 
                <p id="check_logs"><a href="#" >Check logs</a></p>
            </div>
        </div>
        <div class="cards">
            <div class="conted">
                <p><strong>Active exams:</strong></p>
            </div>
            <div class="conted">
                <p><span id = "active_examination">0</span> : exam(s)</p>
            </div>    
            <div class="conted">
                <p id="view_active_exams"><a href="#">More..</a></p>
            </div>    
        </div>
        <div class="cards">
            <div class="conted">
                <p><strong>Subjects I teach :</strong></p>
            </div>
            <div class="conted">
                <p><span id = "my_subjects">1</span> : Subject(s)</p>
            </div>    
            <div class="conted">
                <p id="view_my_subs"><a href="#my_information_inner">More..</a></p>
            </div>    
        </div>
        
        <!--<div class="cards">
            <div class="conted">
                <p><strong>Todays activities:</strong></p>
            </div>
            <div class="conted">
                <p><ul>
                    <p>Scout camping</p>
                    <p>Drama training</p>
                    <p>Music training</p>
                </ul></p>
            </div>    
            <div class="conted">
                <p><a href="#">More..</a></p>
            </div>    
        </div>-->
    </div>

</div>