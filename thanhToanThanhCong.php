
<?php
include('header.php');

?>	


<!-- ______________________________________________________________________________________________________________________________ -->
<style>
    #thanhtoan ,#thanhtoan2{
        width: 100%;
        position: relative;
         display: flex;
         justify-content: center;
        
}
#bnt-tieptuc{
    width: 10%;
    height: 10%;
    margin-top: 32%;
    border-radius: 20px;
    border: 0.5 solid red;
    font-size: 1vw;
    position: absolute;

}
#bnt-tieptuc2{
    width: 30%;
    height: 7%;
    margin-top: 100%;
    border-radius: 20px;
    border: 0.5vw solid red;
    font-size: 3vw;
    position: absolute;

}
#thongbao{
    width: 30%;
    height: 36%;
    margin-top: 20%;
    position: absolute;
    border-radius: 20px;
    border: 0.5vw solid red;
    background-image: linear-gradient(to bottom right, rgb(242, 193, 113), pink);
}
    

#thongbao p{
    margin-top: 5vw;
    text-align: center;
    font-size: 2vw;
    color: black;
    
}
#thongbao2{
    width: 60%;
    height: 40%;
    margin-top: 60%;
    position: absolute;
    border-radius: 20px;
    border: 0.5vw solid red;
    background-image: linear-gradient(to bottom right, rgb(242, 193, 113), pink);
}
    

#thongbao2 p{
    margin-top: 8vw;
    text-align: center;
    font-size: 6vw;
    color: black;
    
}

@media screen and (min-width: 991px) { 
    #thanhtoan2{
            display: none;
    }
}

@media screen and (max-width: 991px) { 
    #thanhtoan{
            display: none;
    }
}
</style>


<div id="thanhtoan">

        <img id="anh1" src="images/anh_Tinh/Background-Vintage-lich-su-dep.jpg" width="100%">
        
        <div id="thongbao" >
                <p>
                    ĐẶT HÀNG THÀNH CÔNG!!
                </p>
        </div>
        <button id="bnt-tieptuc" onclick="window.location.href='index.php'"><b>Tiếp tục mua hàng</b></button>
</div>

<div id="thanhtoan2">

        <img id="anh2" src="images/anh_Tinh/BST-MP-17.jpg" width="100%">
        <div id="thongbao2" >
                <p>
                    ĐẶT HÀNG THÀNH CÔNG!!
                </p>
        </div>
        <button id="bnt-tieptuc2" onclick="window.location.href='index.php'"><b>Tiếp tục mua hàng</b></button>
</div>

    <!-- ______________________________________________________________________________________________________________________________ -->

    <?php
include('foot.php');
?>