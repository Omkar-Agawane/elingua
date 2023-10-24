<?php require 'header.php' ; 
//require './fetch/userfetch.php';
?>

<div class=" index" style="background-color:#E2E2E3 ;">
    <div class="container">
        <div class="teaf-card">
                <div class="card-content">  
                <div class="card-menu">
                        <a onclick = "toggle_submenu('toggle','mycourse',event)" class="toggle-submenu active">My Courses &nbsp; | &nbsp;</a>
                        <a  onclick = "toggle_submenu('toggle','changepass',event)" class="toggle-submenu">Change Password &nbsp; | &nbsp;</a>
                        <a  onclick="logOut()" class="toggle-submenu">Log Out</a>
                    </div>  
                    <hr>
                    <br>
                           <div class="container">

                                                        <table id="myTable">
                                        <thead>
                                            <tr>
                                                <th>Course Id</th>
                                                <th>Course Name</th>
                                                <th>Option</th>
                                            </tr>
                                          
                                        </thead>
                                        <tbody id="tableBody"></tbody>
                                    </table>

                            </div>
                      <div class="toggle" id="changepass" style="display:none">
                      
                      
                          <form class="form" action="./form/passwordchange.php?email=<?php echo $email; ?>" method="POST">
                            <input required type="password" name="newpass"placeholder="New Password">
                            <button type="submit" class="secondary-btn">Submit</button>
                           </form>

                      </div>
                 
            </div>
         </div>
    
          
    </div>
    
</div>




<?php require 'footer.php' ; ?>


<script>
    
 fetch("./fetch/userfetch.php?username=info@teafweb.com").then((res)=>{
    return res.json();
}).then((data)=>{
    console.log(data);
    const jsonData = data;
    const tableBody = document.getElementById("tableBody");

    jsonData.forEach((item) => {
            const row = tableBody.insertRow();
            const nameCell = row.insertCell(0);
            const ageCell = row.insertCell(1);
            const countryCell = row.insertCell(2);

            nameCell.innerHTML = item.courseid;
            ageCell.innerHTML = item.coursename;
            countryCell.innerHTML = `<a class="btn1"href="./usercourse.php?id=${item.courseid}">Take Course Now</a>`
        });
})







    const user = islogin().then((res)=>{
        if(res == false){
        location.href = "./signin.php"
    }
    });
    
</script>