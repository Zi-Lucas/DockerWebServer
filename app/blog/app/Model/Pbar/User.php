<?php

namespace App\Model\Pbar;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * 与模型关联的表名
     *
     * @var string
     */
    protected $table = 'pbar_user';

    /**
     * 重定义主键
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * 指示模型主键是否递增
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * 如果主键不是一个整数。
     *
     * @var string
     */
//    protected $keyType = 'string';

    /**
     * 指示是否自动维护时间戳
     *Eloquent 预期你的数据表中存在 created_at 和 updated_at
     * @var bool
     */
    public $timestamps = false;

    /*
     * 自定义时间戳的格式
     * */
//    protected $dateFormat = 'U';
    /**
     * 自定义存储时间戳的字段名
     */
//    const CREATED_AT = 'creation_date';
//    const UPDATED_AT = 'last_update';

    /**
     * 模型的连接名称
     *
     * @var string
     */
    protected $connection = 'mysql';
}
