<?php
    include('Connect.php');

    class data
    {
        




        // -----------------Trang chủ
                            // Slider : 
                            function select_slide()
                            {
                                global $con;
                                $sql = "SELECT * FROM trangchu_slider ";
                                $run = mysqli_query($con,$sql);
                                return $run;
                                
                            }

                            // Sản phẩm 
                                // sản phẩm mới nhập
                            function  select_TOP10_sanpham()
                            {
                                global $con;
                                $sql = "SELECT *
                                                FROM sanpham
                                                ORDER BY Ngay_nhap DESC
                                                LIMIT 10";
                                $run = mysqli_query($con,$sql);
                                return $run;
                            }
             // ----------------Form sản phẩm            
                                // sản tất cả phẩm
                            function  select_ALL_sanpham()
                            {
                                global $con;
                                $sql = "SELECT * FROM sanpham";
                                $run = mysqli_query($con,$sql);
                                return $run;
                            }
                            // Tìm kiếm theo phân loại là nam
                            function  select_sanpham_nam($phanloai)
                            {
                                global $con;
                                $sql = "SELECT * FROM sanpham WHERE Phan_loai=$phanloai";
                                $run = mysqli_query($con,$sql);
                                return $run;
                            }


            // -------------Form đăng nhập

                            //
                            public function select_role_user()
                            {
                                global $con;
                                $sql="SELECT * FROM user";
                                $run = mysqli_query($con,$sql);
                                return $run;
                            }
            
                            
          


            //-----------------Form giỏ hàng

                            function  select_id_sanpham($idSanpham)
                                            {
                                                global $con;
                                                $sql = "SELECT * FROM sanpham WHERE id_SanPham = $idSanpham";
                                                $run = mysqli_query($con,$sql);
                                                return $run;
                                            }

            //-----------------------Form Đăng ký
                                //insert
                                public function insertDangKy($name,$password,$hoten,$phone,$tinhthanh,$quanhuyen,$xaphuong,$sonha)
                                    {
                                        global $con;
                                        $sql ="INSERT INTO user (name,password,hoten,phone,TinhThanh,QuanHuyen,XaPhuong,SoNha) values('$name','$password','$hoten','$phone','$tinhthanh','$quanhuyen','$xaphuong','$sonha')";
                                        $run= mysqli_query($con,$sql);
                                        return $run;
                                    }
             //----------------------Form quản lý của admin
                                    
                                // quản lý xóa slide
                                    public function take_slide($id)
                                {
                                    global $con;
                                    $sql = "DELETE from  trangchu_slider where id_slider ='$id'";
                                    $run = mysqli_query($con,$sql);
                                    return $run;
                                }  
                                
                                // thêm ảnh
                                    public function insert_anh($anh_slider)
                                    {
                                        global $con;
                                        $sql = "INSERT INTO trangchu_slider (name_slider) values('$anh_slider')";
                                        $run = mysqli_query($con,$sql);
                                        return $run;
                                    }
                                // bán chạy
                                    public function them_banchay($id)
                                    {
                                        global $con;
                                        $sql = "UPDATE sanpham set Ban_chay = 1 where id_SanPham = $id";
                                        $run = mysqli_query($con,$sql);
                                        return $run;
                                    }
                                    public function xoa_banchay($id)
                                    {
                                        global $con;
                                        $sql = "UPDATE sanpham set Ban_chay = 0 where id_SanPham = $id";
                                        $run = mysqli_query($con,$sql);
                                        return $run;
                                    }
                                    // trạng thái
                                    public function con_hang($id)
                                    {
                                        global $con;
                                        $sql = "UPDATE sanpham set Trang_thai = 1 where id_SanPham = $id";
                                        $run = mysqli_query($con,$sql);
                                        return $run;
                                    }
                                    public function het_hang($id)
                                    {
                                        global $con;
                                        $sql = "UPDATE sanpham set Trang_thai = 0 where id_SanPham = $id";
                                        $run = mysqli_query($con,$sql);
                                        return $run;
                                    }
                                // insert vào Sản phẩm
                                public function insert_Sanpham($tenSP,$anhSP,$GiaCu,$GiaMoi,$PhanLoai,$anhslide1,$anhslide2,$anhslide3 , $gioithieu , $tieude1 , $tieude2 , $tieude3 , $noidung1 , $noidung2 , $noidung3 , $anhmau1 , $anhmau2 , $anhmau3)
                                {
                                    global $con;
                                    $sql = "INSERT INTO sanpham (Ten_SanPham,Anh_sanpham,Gia_cu,Gia_moi,Phan_loai,anh_slide1,anh_slide2,anh_slide3,gioiThieu_1,tieude1,tieude2,tieude3,noidung1,noidung2,noidung3,anhmau1,anhmau2,anhmau3) values('$tenSP','$anhSP','$GiaCu','$GiaMoi','$PhanLoai','$anhslide1','$anhslide2','$anhslide3','$gioithieu','$tieude1','$tieude2','$tieude3','$noidung1','$noidung2','$noidung3','$anhmau1','$anhmau2','$anhmau3')";
                                    $run = mysqli_query($con,$sql);
                                    return $run;
                                }
                                // quản lý xóa sản phẩm theo id
                                public function delete_sanpham($id)
                                {
                                    global $con;
                                    $sql = "DELETE from  sanpham where id_SanPham ='$id'";
                                    $run = mysqli_query($con,$sql);
                                    return $run;
                                }  
                                // Sửa sản phẩm
                                public function Updata_sanpham($id,$tenSP,$anhSP,$GiaCu,$GiaMoi,$PhanLoai,$anhslide1,$anhslide2,$anhslide3 , $gioithieu , $tieude1 , $tieude2 , $tieude3 , $noidung1 , $noidung2 , $noidung3 , $anhmau1 , $anhmau2 , $anhmau3)
                                    {
                                        global $con;
                                        $sql = "UPDATE sanpham set Ten_SanPham='$tenSP',Anh_sanpham='$anhSP',Gia_cu='$GiaCu',Gia_moi='$GiaMoi',Phan_loai='$PhanLoai',anh_slide1='$anhslide1',anh_slide2='$anhslide2',anh_slide3='$anhslide3',gioiThieu_1='$gioithieu',tieude1='$tieude1',tieude2='$tieude2',tieude3='$tieude3',noidung1='$noidung1',noidung2='$noidung2',noidung3='$noidung3',anhmau1='$anhmau1',anhmau2='$anhmau2',anhmau3='$anhmau3' where id_SanPham = $id";
                                        $run = mysqli_query($con,$sql);
                                        return $run;
                                    }
                                // select Sản phẩm theo id
                                    function  select_sanpham_ID($id)
                                    {
                                        global $con;
                                        $sql = "SELECT * FROM sanpham WHERE id_SanPham='$id'" ;
                                        $run = mysqli_query($con,$sql);
                                        return $run;
                                    }
                            //------------Quản lý User
                                    function  select_all_user()
                                    {
                                        global $con;
                                        $sql = "SELECT * FROM user";
                                        $run = mysqli_query($con,$sql);
                                        return $run;
                                    } 
                                         // XÓa người dùng
                                         public function delete_user($id)
                                            {
                                                global $con;
                                                $sql = "DELETE from  user where id_user ='$id'";
                                                $run = mysqli_query($con,$sql);
                                                return $run;
                                            }  
                        
                    //-----------------------Người dung sau khi đăng nhập

                                            //Thêm vào giỏ hàng
                                   public function insert_giohang($id_user,$id_sanpham,$giasanpham)
                                   {
                                       global $con;
                                       $sql="INSERT INTO giohang (id_user,id_sanpham,giasanpham) values('$id_user','$id_sanpham','$giasanpham')";
                                       $run = mysqli_query($con,$sql);
                                       return $run;
                                   }        
                                   
                                   // select giỏ hàng
                                   function  select_giohang($id_user)
                                    {
                                        global $con;
                                        $sql = "SELECT * FROM giohang WHERE id_user='$id_user'" ;
                                        $run = mysqli_query($con,$sql);
                                        return $run;
                                    }
                                    // đến số lượng
                                    function  dem_giohang($id_user)
                                    {
                                        global $con;
                                        $sql = "SELECT COUNT(id) soluong FROM giohang WHERE id_user='$id_user'" ;
                                        $run = mysqli_query($con,$sql);
                                        return $run;
                                    }
                                    // Tính tổng giá sản phẩm
                                    function  Tinh_tong_giasanpham($id_user)
                                    {
                                        global $con;
                                        $sql = "SELECT SUM(giasanpham * soluong) FROM `giohang` WHERE id_user='$id_user'" ;
                                        $run = mysqli_query($con,$sql);
                                        return $run;
                                    }
                                    // select User theo id
                                    function  select_User_id($id_user)
                                    {
                                        global $con;
                                        $sql = "SELECT * FROM user WHERE id_user='$id_user'" ;
                                        $run = mysqli_query($con,$sql);
                                        return $run;
                                    }
                                    // Sửa thông tin User
                                    function  update_User_id($hoten,$hotendangnhap,$matkhau,$dienthoai,$tinhthanh,$quanhuyen,$xaphuong,$sonha,$id_user)
                                    {
                                        global $con;
                                        $sql = "UPDATE user SET hoten='$hoten',name='$hotendangnhap',password='$matkhau',phone='$dienthoai',TinhThanh='$tinhthanh',QuanHuyen='$quanhuyen',XaPhuong='$xaphuong',Sonha='$sonha' WHERE id_user='$id_user' " ;
                                        $run = mysqli_query($con,$sql);
                                        return $run;
                                    }
                                    // Xóa giỏ hàng 
                                    public function delete_giothang($id)
                                    {
                                        global $con;
                                        $sql = "DELETE from  giohang where id ='$id'";
                                        $run = mysqli_query($con,$sql);
                                        return $run;
                                    }  
                                     // Xóa ---Hết--- giỏ hàng 
                                     public function delete_ALL_giothang($id)
                                     {
                                         global $con;
                                         $sql = "DELETE from  giohang where id_user ='$id'";
                                         $run = mysqli_query($con,$sql);
                                         return $run;
                                     }  
                     
                    
                    
                    
                         //----------------------------- Giới thiệu------------------------
                                    
                                        // giao diện
                                        // select  thông tin
                                        function  select_gioithieu()
                                        {
                                            global $con;
                                            $sql = "SELECT * FROM gioithieu" ;
                                            $run = mysqli_query($con,$sql);
                                            return $run;
                                        } 
                                        // xóa giới thiệu
                                        public function delete_gioithieu($id)
                                            {
                                                global $con;
                                                $sql = "DELETE from  gioithieu where id ='$id'";
                                                $run = mysqli_query($con,$sql);
                                                return $run;
                                            } 
                                            
                                        // thêm giới thiệu
                                        public function insert_gioithieu($anhgioithieu,$noidung)
                                            {
                                                global $con;
                                                $sql="INSERT INTO gioithieu (anh_gioithieu,noidung) values('$anhgioithieu','$noidung')";
                                                $run = mysqli_query($con,$sql);
                                                return $run;
                                            } 
                                        // select theo id
                                        function  select_gioithieu_id($id)
                                        {
                                            global $con;
                                            $sql = "SELECT * FROM gioithieu WHERE id='$id'"  ;
                                            $run = mysqli_query($con,$sql);
                                            return $run;
                                        } 
                                        // updata giới thiệu 
                                        public function updata_gioithieu($id,$anhgioithieu,$noidung)
                                            {
                                                global $con;
                                                $sql = "UPDATE gioithieu set  anh_gioithieu='$anhgioithieu', noidung='$noidung'  where id= $id";
                                                $run = mysqli_query($con,$sql);
                                                return $run;
                                            }  
                    // _____________________________________Hóa ĐƠn______________________________________ 
                                        //insert hoadon
                                    public function insert_HoaDon($hoten,$sdt,$tinh,$quan,$xaPhuong,$soNha,$idRamdom)
                                    {
                                        global $con;
                                        $sql = "INSERT INTO hoadon (hoTen,SDT,Tinh,Quan,XaPhuong,SoNha,id_ramdomHD) values('$hoten','$sdt','$tinh','$quan','$xaPhuong','$soNha','$idRamdom')";
                                        $run = mysqli_query($con,$sql);
                                        return $run;
                                    }
                                    //insert bang giohang2
                                    public function insert_giohang2($id_sp,$soluongsp,$tongtien,$sdt,$idRamdom)
                                    {
                                        global $con;
                                        $sql = "INSERT INTO giohang2 (id_sp,id_SDT,SoLuong,tongTien,id_ramdom) values('$id_sp','$sdt','$soluongsp','$tongtien','$idRamdom')";
                                        $run = mysqli_query($con,$sql);
                                        return $run;
                                    }
                                    // select
                                    function  select_HoaDon()
                                    {
                                        global $con;
                                        $sql = "SELECT * FROM hoadon ORDER BY ngaythang desc";
                                        $run = mysqli_query($con,$sql);
                                        return $run;
                                    } 
                                    // select giohang2
                                    function  select_giohang2()
                                    {
                                        global $con;
                                        $sql = "SELECT * FROM giohang2 ";
                                        $run = mysqli_query($con,$sql);
                                        return $run;
                                    } 
                                    // select id
                                    function  select_HoaDon_chiTiet($id)
                                    {
                                        global $con;
                                        $sql = "SELECT * FROM hoadon WHERE id_hoadon='$id'";
                                        $run = mysqli_query($con,$sql);
                                        return $run;
                                    }
                                    // select sanpham
                                    function  select_HoaDon_chiTiet_sanpham($id)
                                    {
                                        global $con;
                                        $sql = "SELECT HD.*, SP.*,GH.*
                                        FROM hoadon As HD, sanpham AS SP, giohang2 As GH
                                        WHERE GH.id_sp=SP.id_SanPham AND HD.SDT=GH.id_SDT AND HD.ngaythang=GH.id_ngaythang AND HD.id_hoadon='$id' ";
                                        $run = mysqli_query($con,$sql);
                                        return $run;
                                    } 

                                    // updata role_hoadon = 1
                                    public function updata_role_1($id)
                                    {
                                        global $con;
                                        $sql = "UPDATE hoadon set role_hoadon=1 where id_hoadon = $id";
                                        $run = mysqli_query($con,$sql);
                                        return $run;
                                    }
                                     // updata role_hoadon = 2
                                     public function updata_role_2($id)
                                     {
                                         global $con;
                                         $sql = "UPDATE hoadon set role_hoadon=2 where id_hoadon = $id";
                                         $run = mysqli_query($con,$sql);
                                         return $run;
                                     }
                                     //xóa hoadon
                                     public function xoa_donhang($id)
                                            {
                                                global $con;
                                                $sql = "DELETE from  hoadon where id_hoadon ='$id'";
                                                $run = mysqli_query($con,$sql);
                                                return $run;
                                            } 
                                    //xóa giohang2
                                    // public function xoa_giohang2($sdt)
                                    // {
                                    //     global $con;
                                    //     $sql = "DELETE from  giohang2 where id_SDT ='$sdt' ";
                                    //     $run = mysqli_query($con,$sql);
                                    //     return $run;
                                    // } 
                                    public function xoa_giohang3($ngaythang,$sdt)
                                    {
                                        global $con;
                                        $sql = "DELETE from  giohang2 where id_ramdom='$ngaythang' and id_SDT ='$sdt' ";
                                        $run = mysqli_query($con,$sql);
                                        return $run;
                                    } 
                                   // select sanpham đầu tiên
                                   function  select_HoaDon_chiTiet_sanpham_dautien($id)
                                   {
                                       global $con;
                                       $sql = "SELECT GH.*
                                       FROM hoadon As HD, sanpham AS SP, giohang2 As GH
                                       WHERE GH.id_sp=SP.id_SanPham AND HD.SDT=GH.id_SDT AND HD.ngaythang=GH.id_ngaythang AND HD.id_hoadon='$id' ";
                                       $run = mysqli_query($con,$sql);
                                       return $run;
                                   } 
                                        
                        

                

    }

    
?>