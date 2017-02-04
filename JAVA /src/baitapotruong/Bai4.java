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
package baitapotruong;

import java.util.Scanner;

/**
 *
 * @author Cường <duongcuong96 at gmail dot com>
 */
public class Bai4 {

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.println("nhập độ dài dãy n : ");
        int n = sc.nextInt();
        int tong = 0;
        for (int i = 1; i <= n; i++) {
            tong += 1 / i;
        }
        System.out.println("tong : " + tong);
    }
}
