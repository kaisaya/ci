<form action="/user/update/<?php echo $user->user_id ?>" method="post">
                   <div class="form-group">
                       <label>ชื่อ</label>
                       <input value="<?php echo $user->fullname ?>" name="fullname" type="text" class="form-control" placeholder="กรอกชื่อ สกุล">
                   </div>
                   <div class="form-group">
                       <label>อีเมล์</label>
                       <input  value="<?php echo $user->email ?>" name="email" type="email" class="form-control" placeholder="กรอกอีเมล์">
                   </div>
                   <div class="form-group">
                       <label>อายุ</label>
                       <input  value="<?php echo $user->age ?>" name="age" type="number" class="form-control" placeholder="กรอกอายุ">
                   </div>
                   <button type="submit" class="btn btn-primary">บันทึก</button>
           </form>