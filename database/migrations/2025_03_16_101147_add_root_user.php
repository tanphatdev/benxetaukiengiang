<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AddRootUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Thêm user root vào bảng users
        DB::table('users')->insert([
            'name' => 'root',
            'email' => 'root@example.com',
            'password' => Hash::make('Admin@123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Xóa user root khỏi bảng users
        DB::table('users')->where('email', 'root@example.com')->delete();
    }
}