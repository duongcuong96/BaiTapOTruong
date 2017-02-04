/* 
 * Copyright (C) 2017 Cường <duongcuong96 at gmail dot com>.
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301  USA
 */
// Đại khái là dùng thoải mái đuê :3 , cái này t code ở mức chạy dc thôi chứ ko bắt exception đâu, cho nhanh =))
package OnKiemTraJava.CauHoiVaDapAn.De8;

/**
 *
 * @author Cường <duongcuong96 at gmail dot com>
 */
public class NhanVienVanPhong extends NhanVien {

    public float hsl; //he so luong 
    public int ngayNghi;
    public float luong;
    public float luongNghiViec;

    @Override
    public void nhap() {
        super.nhap();
        luongNghiViec = ngayNghi * (hsl * 1050000) / 20;
        luong = hsl * 1050000 + phuCap - luongNghiViec;
    }
    
    @Override 
    public void xuat(){
        System.out.println("Nhân viên văn phòng :");
        super.xuat();
    }


}
