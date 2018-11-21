<?php

namespace App\Console\Commands\OneDrive;

use App\Helpers\Constants;
use Illuminate\Console\Command;

class ListCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'od:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List Command';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info(Constants::LOGO);
        $this->warn('OLAINDEX Console Command');
        $header = ['command', 'description', 'params'];
        $list = [
            ['od:install', '初始安装', ''],
            ['od:switch', '切换版本（世纪互联）', '{--type=}'],
            ['od:login', '登入账户', ''],
            ['od:logout', '登出账户', '{--y}'],
            ['od:password', '重置密码', ''],
            ['od:reset', '重置应用', '{--y}'],
            ['od:update', '更新升级', ''],
            ['od:upload', '上传文件', '{local} {remote} {--chuck=}'],
            ['od:download', '下载文件', '{remote}'],
            ['od:ls', '文件列表', '{path} {--offset=} {--limit=}'],
            ['od:search', '搜索文件', '{keyword} {--id=} {--path=} {--offset=} {--limit=}'],
            ['od:mkdir', '新建目录', '{remote}'],
            ['od:mv', '移动项目', '{source} {target}'],
            ['od:cp', '复制文件', '{source} {target}'],
            ['od:delete', '删除项目', '{remote}'],
            ['od:share', '分享直链', '{remote}'],
            ['od:direct', '永久直链', '{remote}'],
            ['od:info', 'OneDrive信息', ''],
            ['od:refresh', 'Refresh Token', ''],
        ];
        $this->table($header, $list, 'borderless');
    }
}