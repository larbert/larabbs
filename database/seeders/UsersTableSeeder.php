<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 生成数据集合
        User::factory()->count(10)->create();

        // 单独处理第一个用户的数据
        $user = User::find(1);
        $user->name = 'larbert';
        $user->email = '17835126760@163.com';
        $user->avatar = 'http://larabbs.localhost/uploads/images/avatar/202102/05/2_1612454806_AI1xqrdMHz.jpg';
        $user->save();
    }
}
