<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nickname', 100)->default('')->comment('用户昵称 sync wecaht');
            $table->string('avatar')->nullable()->comment('用户头像 sync wecaht');
            $table->string('phone', 15)->nullable()->unique()->comment('用户手机号');
            $table->tinyInteger('sex')->default(0)->comment('性别: 0未知 1 男, 2 女');
            $table->string('wx_official_account_openid')->nullable()->unique()->comment('微信公众号id');
            $table->string('wx_union_id')->unique()->comment('微信平台 UnionID');
            $table->string('wx_province')->nullable()->comment('普通用户个人资料填写的省份');
            $table->string('wx_city')->nullable()->comment('普通用户个人资料填写的城市');
            $table->string('wx_country')->nullable()->comment('国家，如中国为CN');

            $table->boolean('is_merchant')->default(false)->comment('是否是商家');
            $table->bigInteger('parent_id')->default(0)->comment('子账号 父id');
            $table->timestamp('created_at')->nullable()->comment('用户创建时间');
        });

        set_table_name('users', '用户基础表');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
