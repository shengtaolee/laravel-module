# 基于Laravel的模块化骨架

## 项目目录结构
```text
- root 项目根目录
    - modules 模块目录
        - Demo demo模块目录
            - Console
                - Commands cli文件目录
            - Http
                - Controllers 控制器目录
                - Middleware 中间件目录
            - Models 模型文件夹
        - routes.php 模块路由文件
```

## 说明

### 创建模块
    1. 参考modules/Demo, 创建相同的目录结构即可.
    2. 后期增加命令行, 根据输入自动创建目录.

### 路由
    1. 在模块目录下增加routes.php
    2. 需要在modules/routes.php中增加模块的路由

### 视图
    1. 新增mview全局辅助函数.
        * 和view使用方法参数传递有所不同
        * 第一个参数需要传模块名
        * 第二个参数为模板文件
        * 第三个参数为视图渲染所需数据
