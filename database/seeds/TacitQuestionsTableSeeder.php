<?php
use Illuminate\Database\Seeder;

class TacitQuestionsTableSeeder extends Seeder {
    public function run() {
        \DB::table('tacit_questions')->delete();
        
        \DB::table('tacit_questions')->insert(array (
            0 => 
            array (
                'choices' => '脸
身材
穿着
不可描述',
                'created_at' => '2019-09-04 13:54:51',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 1,
                'sort' => 255,
                'title' => '迎面而来一个异性我最先在意什么？',
                'updated_at' => '2019-09-04 13:54:51',
            ),
            1 => 
            array (
                'choices' => '无辣不欢
一般
只能吃微辣
完全不能吃辣',
                'created_at' => '2019-09-04 14:02:47',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 2,
                'sort' => 255,
                'title' => '我吃辣能力怎么样？',
                'updated_at' => '2019-09-04 14:02:47',
            ),
            2 => 
            array (
                'choices' => '粘人
不粘人
看情况',
                'created_at' => '2019-09-04 14:03:30',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 3,
                'sort' => 255,
                'title' => '在爱情中，我是个粘人的人吗？',
                'updated_at' => '2019-09-04 14:03:30',
            ),
            3 => 
            array (
                'choices' => '是的，闹钟响了好几次都不起来
不是，每次都能按时起床
闹钟是啥？每次睡到自然醒',
                'created_at' => '2019-09-04 14:04:58',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 4,
                'sort' => 255,
                'title' => '我是关了三次闹钟才会起床的人吗？',
                'updated_at' => '2019-09-04 14:04:58',
            ),
            4 => 
            array (
                'choices' => '我虽花心，但我懂得如何自律
不但不花心，而且很深情专一
没机会花心，因为身边的人都是瞎子',
                'created_at' => '2019-09-04 14:06:10',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 5,
                'sort' => 255,
                'title' => '我是一个花心的人吗',
                'updated_at' => '2019-09-04 14:06:10',
            ),
            5 => 
            array (
                'choices' => '在吗
有对象了吗
一个月赚多少啊
能给我包个红包吗',
                'created_at' => '2019-09-04 14:07:16',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 6,
                'sort' => 255,
                'title' => '每次听到我都忍不住想diss的是？',
                'updated_at' => '2019-09-04 14:07:16',
            ),
            6 => 
            array (
                'choices' => '名副其实的“鸽王”
经常能收到“真香警告”
一只行走的“柠檬精”
常被调侃为“复读机”',
                'created_at' => '2019-09-04 14:09:21',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 7,
                'sort' => 255,
                'title' => '聊聊人类四大本质',
                'updated_at' => '2019-09-04 14:09:21',
            ),
            7 => 
            array (
                'choices' => '初中
高中
大学
工作后',
                'created_at' => '2019-09-04 14:09:57',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 8,
                'sort' => 255,
                'title' => '我第一次恋爱在什么时候？',
                'updated_at' => '2019-09-04 14:09:57',
            ),
            8 => 
            array (
                'choices' => '正宗夜猫子，越晚越精神
早起早睡身体好
偶尔熬夜',
                'created_at' => '2019-09-04 14:10:48',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 9,
                'sort' => 255,
                'title' => '我晚上休息的状态',
                'updated_at' => '2019-09-04 14:10:48',
            ),
            9 => 
            array (
                'choices' => '默默关注
大胆告白
放在心底',
                'created_at' => '2019-09-04 14:11:33',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 10,
                'sort' => 255,
                'title' => '遇见喜欢的人我会怎么做',
                'updated_at' => '2019-09-04 14:11:33',
            ),
            10 => 
            array (
                'choices' => '“如果你现任跟你前任同时掉水里，我能做你女朋友吗？”
“最近有谣言说我喜欢你，我澄清一下这不是谣言。”
“我想你应该很忙吧，那就看前三个字好了。”',
                'created_at' => '2019-09-04 14:14:16',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 11,
                'sort' => 255,
                'title' => '以下那句话最能撩到我？',
                'updated_at' => '2019-09-04 14:14:16',
            ),
            11 => 
            array (
                'choices' => '7-9点
9-10点
11-12点
12点以后',
                'created_at' => '2019-09-04 14:15:02',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 12,
                'sort' => 255,
                'title' => '每天晚上几点睡觉？',
                'updated_at' => '2019-09-04 14:15:02',
            ),
            12 => 
            array (
                'choices' => '在家一直是全裸睡觉，一般人我不告诉他
一般都是半裸，全脱完有点尴尬...
不不不，还是算了，不跟你们玩了',
                'created_at' => '2019-09-04 14:16:30',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 13,
                'sort' => 255,
                'title' => '我喜欢裸睡吗？',
                'updated_at' => '2019-09-04 14:16:30',
            ),
            13 => 
            array (
                'choices' => '不多，也就百八十个，反正只是暗恋，哈哈
暗恋？不存在的，一直都是别人暗恋我
曾经有，现在各奔东西早已不联系了',
                'created_at' => '2019-09-04 14:18:04',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 14,
                'sort' => 255,
                'title' => '我暗恋过几个异性？',
                'updated_at' => '2019-09-04 14:18:04',
            ),
            14 => 
            array (
                'choices' => '把自己送出去算不算？
亲自制作一个DIY小物品，有纪念价值那种
陪Ta疯一天，满足Ta当天所有要求（承受范围内）',
                'created_at' => '2019-09-04 14:20:37',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 15,
                'sort' => 255,
                'title' => '假如另一半生日，我会送什么给Ta？',
                'updated_at' => '2019-09-04 14:20:37',
            ),
            15 => 
            array (
                'choices' => '苹果
华为
小米
OPPO',
                'created_at' => '2019-09-05 01:15:27',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 16,
                'sort' => 255,
                'title' => '我用的手机是？',
                'updated_at' => '2019-09-05 01:15:27',
            ),
            16 => 
            array (
                'choices' => '微笑
有小酒窝
露牙笑
笑到前俯后仰',
                'created_at' => '2019-09-05 01:16:37',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 17,
                'sort' => 255,
                'title' => '我平时笑起来的样子？',
                'updated_at' => '2019-09-05 01:16:37',
            ),
            17 => 
            array (
                'choices' => '那都是曾经的痛，不提也罢
都是我甩别人，失恋是不存在的
何时才会在一起，既然不合适不必勉强',
                'created_at' => '2019-09-05 01:18:14',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 18,
                'sort' => 255,
                'title' => '我有失恋过吗？',
                'updated_at' => '2019-09-05 01:18:14',
            ),
            18 => 
            array (
                'choices' => '主动
不主动
看情况',
                'created_at' => '2019-09-05 01:19:21',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 19,
                'sort' => 255,
                'title' => '在爱情中，我是个主动的人吗？',
                'updated_at' => '2019-09-05 01:19:21',
            ),
            19 => 
            array (
                'choices' => '帅
早恋
翻墙去网吧
喜欢瞎说大实话',
                'created_at' => '2019-09-05 01:20:21',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 20,
                'sort' => 255,
                'title' => '我第一次挨打的原因？',
                'updated_at' => '2019-09-05 01:20:21',
            ),
            20 => 
            array (
                'choices' => '有
没有
还没出生',
                'created_at' => '2019-09-05 01:21:45',
                'created_by' => 0,
                'deleted_at' => NULL,
                'id' => 21,
                'sort' => 255,
                'title' => '我有暗恋对象吗？',
                'updated_at' => '2019-09-05 01:21:45',
            ),
        ));
    }
}
