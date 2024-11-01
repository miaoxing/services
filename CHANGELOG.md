## [0.9.8](https://github.com/miaoxing/services/compare/v0.9.7...v0.9.8) (2024-11-01)





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.16.1` to `0.17.0`

## [0.9.7](https://github.com/miaoxing/services/compare/v0.9.6...v0.9.7) (2024-09-30)





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.16.0` to `0.16.1`

## [0.9.6](https://github.com/miaoxing/services/compare/v0.9.5...v0.9.6) (2024-09-01)


### Features

* 插件增加 wei 命令行入口 ([fba3b00](https://github.com/miaoxing/services/commit/fba3b002ffb6e15a2c40c40512020e653f39e6eb))
* **services:** `DestroyAction` 添加 `beforeFind` 和 `afterFind` 事件 ([8374612](https://github.com/miaoxing/services/commit/8374612f57d6a78df8fd840dc69ea09e6cdf07a8))





### Dependencies

* **@miaoxing/dev:** upgrade from `9.1.3` to `9.2.0`
* **@miaoxing/plugin:** upgrade from `0.15.2` to `0.16.0`

## [0.9.5](https://github.com/miaoxing/services/compare/v0.9.4...v0.9.5) (2024-08-03)





### Dependencies

* **@miaoxing/dev:** upgrade from `9.1.2` to `9.1.3`
* **@miaoxing/plugin:** upgrade from `0.15.1` to `0.15.2`

## [0.9.4](https://github.com/miaoxing/services/compare/v0.9.3...v0.9.4) (2024-07-31)





### Dependencies

* **@miaoxing/dev:** upgrade from `9.1.1` to `9.1.2`
* **@miaoxing/plugin:** upgrade from `0.15.0` to `0.15.1`

## [0.9.3](https://github.com/miaoxing/services/compare/v0.9.2...v0.9.3) (2024-06-30)


### Features

* **services:** 增加 `Cors` 中间件 ([836e478](https://github.com/miaoxing/services/commit/836e4788c4af85e48155da3a73cf42a8080db96d))





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.14.7` to `0.15.0`

## [0.9.2](https://github.com/miaoxing/services/compare/v0.9.1...v0.9.2) (2024-05-30)





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.14.6` to `0.14.7`

## [0.9.1](https://github.com/miaoxing/services/compare/v0.9.0...v0.9.1) (2024-05-01)





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.14.5` to `0.14.6`

# [0.9.0](https://github.com/miaoxing/services/compare/v0.8.6...v0.9.0) (2024-03-31)


### Code Refactoring

* 移除 `laravel` ([1816cb3](https://github.com/miaoxing/services/commit/1816cb3914ecf68ae95e275bbd7b401870c9e281))


### BREAKING CHANGES

* 移除 `laravel`





### Dependencies

* **@miaoxing/dev:** upgrade from `9.1.0` to `9.1.1`
* **@miaoxing/plugin:** upgrade from `0.14.4` to `0.14.5`

## [0.8.6](https://github.com/miaoxing/services/compare/v0.8.5...v0.8.6) (2024-02-29)





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.14.3` to `0.14.4`

## [0.8.5](https://github.com/miaoxing/services/compare/v0.8.4...v0.8.5) (2024-02-20)


### Features

* **services, deprecated:** 废弃 `Money` 类，改为使用 `Wei\Money` ([c5965f7](https://github.com/miaoxing/services/commit/c5965f76ec6de17d4a2667349f0214958152646c))





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.14.2` to `0.14.3`

## [0.8.4](https://github.com/miaoxing/services/compare/v0.8.3...v0.8.4) (2024-01-08)





### Dependencies

* **@miaoxing/dev:** upgrade from `9.0.0` to `9.1.0`
* **@miaoxing/plugin:** upgrade from `0.14.1` to `0.14.2`

## [0.8.3](https://github.com/miaoxing/services/compare/v0.8.2...v0.8.3) (2023-12-31)





### Dependencies

* **@miaoxing/dev:** upgrade from `8.2.4` to `9.0.0`
* **@miaoxing/plugin:** upgrade from `0.14.0` to `0.14.1`

## [0.8.2](https://github.com/miaoxing/services/compare/v0.8.1...v0.8.2) (2023-11-30)


### Bug Fixes

* **Logger:** PHP 8.1 Deprecated:  Implicit conversion from float to int loses precision ([d112d5f](https://github.com/miaoxing/services/commit/d112d5faa6f8f797d9d39f9660a4d49b44a7fe84))





### Dependencies

* **@miaoxing/dev:** upgrade from `8.2.3` to `8.2.4`
* **@miaoxing/plugin:** upgrade from `0.13.2` to `0.14.0`

## [0.8.1](https://github.com/miaoxing/services/compare/v0.8.0...v0.8.1) (2023-11-02)


### Features

* **services:** `IndexAction` 允许查询 `include` 配置的关联数据 ([ada7e00](https://github.com/miaoxing/services/commit/ada7e003c48280a2fac3f57796532126aa8b8178))
* **services:** 运行命令行时，预加载全局配置 ([3dcb96b](https://github.com/miaoxing/services/commit/3dcb96bf2cef95c8ba8558e5cf3a62b7356debd3))





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.13.1` to `0.13.2`

# [0.8.0](https://github.com/miaoxing/services/compare/v0.7.5...v0.8.0) (2023-09-30)


### Code Refactoring

* **services:** 删除 `CsvExporter` 服务 ([44b92fd](https://github.com/miaoxing/services/commit/44b92fd7484c1b6a04e312f425521e1c70c5c3bd))


### Features

* **plugin:** `Money` 增加 `isZero`，`isPositive` 和 `isNegative` 方法 ([129bdb5](https://github.com/miaoxing/services/commit/129bdb5c7acb3f6ab51aac8548b17b2e9d5ddcf7))
* **plugin:** 允许 `Money` 转换为负数 ([07fb601](https://github.com/miaoxing/services/commit/07fb6014de5c1ee07e03687d180d66e3d109ebb9))
* **plugin, deprecated:** `Plugin` 废弃 `ignoredServices` 属性，改为使用 `[@ignored](https://github.com/ignored)` 注释 ([494b18f](https://github.com/miaoxing/services/commit/494b18f7e4e5953b2d1ff1cf55e2d1f2fe16f8f3))


### BREAKING CHANGES

* **services:** 删除 `CsvExporter` 服务





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.13.0` to `0.13.1`

## [0.7.5](https://github.com/miaoxing/services/compare/v0.7.4...v0.7.5) (2023-09-02)


### Bug Fixes

* **service:** `mig:redo` 命令 `target` 参数未生效 ([6cb9808](https://github.com/miaoxing/services/commit/6cb9808c99eb476bed218c58f537a65202f49bce))


### Features

* **deprecated:** 废弃 `Miaoxing\Services\Service\Http`，改用 `Wei\Http` ([4b90f22](https://github.com/miaoxing/services/commit/4b90f227d56831d90c966890a127288529a87d8a))





### Dependencies

* **@miaoxing/dev:** upgrade from `8.2.2` to `8.2.3`
* **@miaoxing/plugin:** upgrade from `0.12.2` to `0.13.0`

## [0.7.4](https://github.com/miaoxing/services/compare/v0.7.3...v0.7.4) (2023-07-31)


### Features

* **services:** 允许通过 `schedule` 缓存查看计划任务运行信息 ([4ea0744](https://github.com/miaoxing/services/commit/4ea0744cc0fc411371303c3ab717627936605521))
* **services:** 运行计划任务前，加载全局配置 ([6f85fef](https://github.com/miaoxing/services/commit/6f85fefd6f580fdd41caaafb74ebafdc30e301a4))





### Dependencies

* **@miaoxing/dev:** upgrade from `8.2.1` to `8.2.2`
* **@miaoxing/plugin:** upgrade from `0.12.1` to `0.12.2`

## [0.7.3](https://github.com/miaoxing/services/compare/v0.7.2...v0.7.3) (2023-06-30)





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.12.0` to `0.12.1`

## [0.7.2](https://github.com/miaoxing/services/compare/v0.7.1...v0.7.2) (2023-05-31)


### Features

* **services:** `DefaultsAction` 支持通过调用 `createModel` 方法获取模型 ([5a6407d](https://github.com/miaoxing/services/commit/5a6407de10a85fac08c2e4c91d6e5519e87c2713))
* **services:** `MigrationRollback` 增加支持 `only` 选项 ([d50af5f](https://github.com/miaoxing/services/commit/d50af5fa0d54c05661cf4c1972876d2b371e1b25))





### Dependencies

* **@miaoxing/dev:** upgrade from `8.2.0` to `8.2.1`
* **@miaoxing/plugin:** upgrade from `0.11.2` to `0.12.0`

## [0.7.1](https://github.com/miaoxing/services/compare/v0.7.0...v0.7.1) (2023-04-30)





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.11.1` to `0.11.2`

# [0.7.0](https://github.com/miaoxing/services/compare/v0.6.7...v0.7.0) (2023-04-15)


### Code Refactoring

* **services:** `*Action` 服务`BaseController` 类型更改 ([546d063](https://github.com/miaoxing/services/commit/546d063ea6808374b3f4c350e30deac2a46763f3))


### Features

* **Http:** `toRet` 方法支持返回值不是数组 ([c638286](https://github.com/miaoxing/services/commit/c638286e6463bb1bbd849b03dca3b6d87264d467))


### BREAKING CHANGES

* **services:** `*Action` 服务`BaseController` 类型更改





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.11.0` to `0.11.1`

## [0.6.7](https://github.com/miaoxing/services/compare/v0.6.6...v0.6.7) (2023-03-01)


### Features

* **services:** `Create/UpdateAction` 增加 `validate` 方法用于校验数据，并将返回 `data` 值作为保存的数据 ([9289fb7](https://github.com/miaoxing/services/commit/9289fb75df7a74df0ea8dafb2219bfdc6a264e0e))
* **services:** `UpdateAction` 增加 `afterFind` 方法 ([1b85c71](https://github.com/miaoxing/services/commit/1b85c71a109f1cf0f5e5331a41bf7af663d54ec3))
* **services:** 允许控制器配置 `requireAuth` 来跳过校验 ([633b151](https://github.com/miaoxing/services/commit/633b1510c4eb4393439a23a8f677211f55d89f87))
* **services, deprecated:** `Auth` middleware 废弃读取 `controllerAuth` 和 `actionAuths` ([9726c35](https://github.com/miaoxing/services/commit/9726c35c6a16491e7b6b5e6b6f952203db95b942))
* **services, experimental:** `DestroyAction` 删除前调用模型的 `checkDestroy` 方法 ([c25730e](https://github.com/miaoxing/services/commit/c25730e79d178e8b69f8e846f21d54da6a6ad881))





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.10.1` to `0.11.0`

## [0.6.6](https://github.com/miaoxing/services/compare/v0.6.5...v0.6.6) (2023-01-31)


### Bug Fixes

* **services:** `Logger` 缺少记录 `context` ([55f40f8](https://github.com/miaoxing/services/commit/55f40f8a42c55941786ead6e8400fd71a87f7883))


### Features

* **services, experimental:** `migration:redo` 后，最后一个插件执行 `g:metadata` ([fc5fd9d](https://github.com/miaoxing/services/commit/fc5fd9d0c066f91e60efc4da16d744ed77a0a6aa))





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.10.0` to `0.10.1`

## [0.6.5](https://github.com/miaoxing/services/compare/v0.6.4...v0.6.5) (2023-01-01)





### Dependencies

* **@miaoxing/dev:** upgrade from `8.1.3` to `8.2.0`
* **@miaoxing/plugin:** upgrade from `0.9.4` to `0.10.0`

## [0.6.4](https://github.com/miaoxing/services/compare/v0.6.3...v0.6.4) (2022-12-01)


### Features

* **services:** `IndexAction` 服务支持导出 Excel ([cce7a89](https://github.com/miaoxing/services/commit/cce7a8902f4347419020a7a305d5ae3d2afd0634))





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.9.3` to `0.9.4`

## [0.6.3](https://github.com/miaoxing/services/compare/v0.6.2...v0.6.3) (2022-11-01)





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.9.2` to `0.9.3`

## [0.6.2](https://github.com/miaoxing/services/compare/v0.6.1...v0.6.2) (2022-09-30)





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.9.1` to `0.9.2`

## [0.6.1](https://github.com/miaoxing/services/compare/v0.6.0...v0.6.1) (2022-09-03)





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.9.0` to `0.9.1`

# [0.6.0](https://github.com/miaoxing/services/compare/v0.5.6...v0.6.0) (2022-08-02)


### Code Refactoring

* **Cls:** 移动 `Cls` 到 `wei` 中 ([40fa4ff](https://github.com/miaoxing/services/commit/40fa4ff5af6138c92bbdf4655009220cc0091560))


### BREAKING CHANGES

* **Cls:** 移动 `Cls` 到 `wei` 中





### Dependencies

* **@miaoxing/dev:** upgrade from `8.1.2` to `8.1.3`
* **@miaoxing/plugin:** upgrade from `0.8.5` to `0.9.0`

## [0.5.6](https://github.com/miaoxing/services/compare/v0.5.5...v0.5.6) (2022-07-02)


### Bug Fixes

* 解决 composer 2.2+ 默认不启用插件导致安装路径错误 ([169f9e3](https://github.com/miaoxing/services/commit/169f9e33879d9436151044cadead4c57d5d983f0))





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.8.4` to `0.8.5`

## [0.5.5](https://github.com/miaoxing/services/compare/v0.5.4...v0.5.5) (2022-07-01)


### Features

* URL 地址改为只返回路径，以便前台生成完整地址 ([c718565](https://github.com/miaoxing/services/commit/c718565ef835c5268bd46dc21049c449afa7a5af))
* **services:** 增加 `migration:redo` 命令 ([12af8a2](https://github.com/miaoxing/services/commit/12af8a224266e60f220d3e4eae87f440ec1ba873))





### Dependencies

* **@miaoxing/dev:** upgrade from `8.1.1` to `8.1.2`
* **@miaoxing/plugin:** upgrade from `0.8.3` to `0.8.4`

## [0.5.4](https://github.com/miaoxing/services/compare/v0.5.3...v0.5.4) (2022-06-01)





### Dependencies

* **@miaoxing/dev:** upgrade from `8.1.0` to `8.1.1`
* **@miaoxing/plugin:** upgrade from `0.8.2` to `0.8.3`

## [0.5.3](https://github.com/miaoxing/services/compare/v0.5.2...v0.5.3) (2022-04-30)


### Features

* **service:** 增加 `DefaultsAction`，用于返回模型默认值 ([60739dd](https://github.com/miaoxing/services/commit/60739dd44ff64abad3f265570c8e264c02ea0392))
* **services:** 增加 `DefaultsTrait` ([de3e745](https://github.com/miaoxing/services/commit/de3e74575c1b1163b30d8860e469d29a44536934))





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.8.1` to `0.8.2`

## [0.5.2](https://github.com/miaoxing/services/compare/v0.5.1...v0.5.2) (2022-03-31)


### Features

* **plugin:** 增加 `*Action::new` 方法用于创建一个新的实例 ([a2547c8](https://github.com/miaoxing/services/commit/a2547c8b549edbbc203845728f6dbc954145851a))





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.8.0` to `0.8.1`

## [0.5.1](https://github.com/miaoxing/services/compare/v0.5.0...v0.5.1) (2022-03-04)





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.7.1` to `0.8.0`

# [0.5.0](https://github.com/miaoxing/services/compare/v0.4.2...v0.5.0) (2022-02-28)


### Code Refactoring

* **logger:** 默认日志更改为 JSON 格式，移除上报到 Sentry 功能 ([5c6e072](https://github.com/miaoxing/services/commit/5c6e072271e4af9a894e829c25c28ead6dd922b3))


### BREAKING CHANGES

* **logger:** 默认日志更改为 JSON 格式，移除上报到 Sentry 功能





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.7.0` to `0.7.1`

## [0.4.2](https://github.com/miaoxing/services/compare/v0.4.1...v0.4.2) (2022-02-05)





### Dependencies

* **@miaoxing/dev:** upgrade from `8.0.1` to `8.1.0`
* **@miaoxing/plugin:** upgrade from `0.6.0` to `0.7.0`

## [0.4.1](https://github.com/miaoxing/services/compare/v0.4.0...v0.4.1) (2022-01-12)


### Features

* **services:** 性别增加 "未知" ([11d14d8](https://github.com/miaoxing/services/commit/11d14d87e13175e142fe7ecdc6326c83fea6ef86))





### Dependencies

* **@miaoxing/dev:** upgrade from `8.0.0` to `8.0.1`
* **@miaoxing/plugin:** upgrade from `0.5.0` to `0.6.0`

# [0.4.0](https://github.com/miaoxing/services/compare/v0.3.12...v0.4.0) (2021-10-28)


### Code Refactoring

* **services:** `expand` 参数改为 `include` ([3184ee6](https://github.com/miaoxing/services/commit/3184ee64c692fccc450606f632088af8b653199e))


### Features

* **Money:** 增加 `Money` 服务，用于计算金额 ([a77099a](https://github.com/miaoxing/services/commit/a77099a01a69729d58e49ee6f96a9a4437c762ac))


### BREAKING CHANGES

* **services:** `expand` 参数改为 `include`





### Dependencies

* **@miaoxing/dev:** upgrade from `7.0.1` to `8.0.0`
* **@miaoxing/plugin:** upgrade from `0.4.7` to `0.5.0`

## [0.3.12](https://github.com/miaoxing/services/compare/v0.3.11...v0.3.12) (2021-05-21)


### Features

* **IndexAction:** 支持页面配置 `expand` 来加载关联模型 ([85ff55d](https://github.com/miaoxing/services/commit/85ff55daaca66205de57afca55b2d610614aa66b))





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.4.6` to `0.4.7`

## [0.3.11](https://github.com/miaoxing/services/compare/v0.3.10...v0.3.11) (2021-05-12)





### Dependencies

* **@miaoxing/dev:** upgrade from `7.0.0` to `7.0.1`
* **@miaoxing/plugin:** upgrade from `0.4.5` to `0.4.6`

## [0.3.10](https://github.com/miaoxing/services/compare/v0.3.9...v0.3.10) (2021-05-11)





### Dependencies

* **@miaoxing/dev:** upgrade from `6.4.0` to `7.0.0`
* **@miaoxing/plugin:** upgrade from `0.4.4` to `0.4.5`

## [0.3.9](https://github.com/miaoxing/services/compare/v0.3.8...v0.3.9) (2021-04-27)


### Features

* **Action:** 增加 `setReq` 方法 ([dac01a0](https://github.com/miaoxing/services/commit/dac01a033e2878a793ccd1290de37a472d382ba9))





### Dependencies

* **@miaoxing/dev:** upgrade from `6.3.4` to `6.4.0`
* **@miaoxing/plugin:** upgrade from `0.4.3` to `0.4.4`

## [0.3.8](https://github.com/miaoxing/services/compare/v0.3.7...v0.3.8) (2021-03-22)





### Dependencies

* **@miaoxing/dev:** upgrade from `6.3.3` to `6.3.4`
* **@miaoxing/plugin:** upgrade from `0.4.2` to `0.4.3`

## [0.3.7](https://github.com/miaoxing/services/compare/v0.3.6...v0.3.7) (2021-03-17)


### Bug Fixes

* 解决重复调用 `*Action` 类出错 ([5338c92](https://github.com/miaoxing/services/commit/5338c92287aabe309a87476c59df4d53a1e04fae))

## [0.3.6](https://github.com/miaoxing/services/compare/v0.3.5...v0.3.6) (2021-03-12)





### Dependencies

* **@miaoxing/dev:** upgrade from `6.3.2` to `6.3.3`
* **@miaoxing/plugin:** upgrade from `0.4.1` to `0.4.2`

## [0.3.5](https://github.com/miaoxing/services/compare/v0.3.4...v0.3.5) (2021-03-10)


### Bug Fixes

* 增加 `laravel/framework` 依赖 ([4f0f70b](https://github.com/miaoxing/services/commit/4f0f70bbd0f960306cb67ea9663b0ec6db154eb1))





### Dependencies

* **@miaoxing/dev:** upgrade from 6.3.1 to 6.3.2
* **@miaoxing/plugin:** upgrade from 0.4.0 to 0.4.1

## [0.3.4](https://github.com/miaoxing/services/compare/v0.3.3...v0.3.4) (2021-03-09)





### Dependencies

* **@miaoxing/dev:** upgrade from 6.3.0 to 6.3.1
* **@miaoxing/plugin:** upgrade from 0.3.3 to 0.4.0

## [0.3.3](https://github.com/miaoxing/services/compare/v0.3.2...v0.3.3) (2021-03-09)





### Dependencies

* **@miaoxing/dev:** upgrade from 6.2.0 to 6.3.0
* **@miaoxing/plugin:** upgrade from 0.3.2 to 0.3.3

## [0.3.2](https://github.com/miaoxing/services/compare/v0.3.1...v0.3.2) (2021-03-05)





### Dependencies

* **@miaoxing/plugin:** upgrade from 0.3.1 to 0.3.2

## [0.3.1](https://github.com/miaoxing/services/compare/v0.3.0...v0.3.1) (2021-03-05)





### Dependencies

* **@miaoxing/dev:** upgrade from 6.1.2 to 6.2.0
* **@miaoxing/plugin:** upgrade from 0.3.0 to 0.3.1

# [0.3.0](https://github.com/miaoxing/services/compare/v0.2.4...v0.3.0) (2021-03-05)


### Code Refactoring

* **Model:** `isNew` 属性改为 `new` ([6c46f70](https://github.com/miaoxing/services/commit/6c46f7060b11943afff99c414b4085f190f7a45c))
* **Model:** `data` 属性改为 `attributes`，相关属性和方法更新 ([2f6247e](https://github.com/miaoxing/services/commit/2f6247ecfab3931e845dc337e715d87d3af73daf))
* `Service/Model` 拆分出 `ModelTrait`, 改名为 `BaseModel` ([dcdd4a1](https://github.com/miaoxing/services/commit/dcdd4a1f84188d50ca33407085aa3de59fcf00d7))
* 移除 `IsRecordExists` 服务，改为使用 `IsModelExists` ([2508673](https://github.com/miaoxing/services/commit/250867313fa646f9b180df5de67f4d607a08a11b))


### Features

* **Convention:** getModelName 支持页面路径包含中划线 ([19ece2a](https://github.com/miaoxing/services/commit/19ece2a1683ae747be9d2e01fdea5d289c8d9693))
* **ShowAction:** 允许页面配置   `expand` 参数，返回模型的关联数据 ([be5d142](https://github.com/miaoxing/services/commit/be5d1421d925011261f88438bd3a51ecf465687e))
* **IndexAction**: 默认调用 `reqQuery` 方法执行自动查询，增加 `beforeReqQuery` 和 `afterReqQuery` 方法和事件 ([336b9bf](https://github.com/miaoxing/services/commit/336b9bff4ee59755e9876645c1daf2c71b170a41))
* **Url:** 增加 `passThroughParams` 属性，如果当前请求存在指定参数，则将参数传递到生成 URL 中 ([76287fe](https://github.com/miaoxing/services/commit/76287fe406014fc4db7da114207c465709353c18))
* ShowAction 增加 afterFind 回调 ([4ceb959](https://github.com/miaoxing/services/commit/4ceb95928518223a0f5d2af0873308050363b264))
* UpdateAction 增加 afterSave 方法 ([5127468](https://github.com/miaoxing/services/commit/51274680a1a150916b919ac68310a95ab8b95889))


### BREAKING CHANGES

* 默认调用 `reqQuery` 方法执行自动查询
* **Model:** `isNew` 属性改为 `new`
* `data` 属性改为 `attributes`，相关属性和方法更新
* `Service/Model` 拆分出 `ModelTrait`, 改名为 `BaseModel`
* 移除 `IsRecordExists` 服务，改为使用 `IsModelExists`





### Dependencies

* **@miaoxing/plugin:** upgrade from 0.2.4 to 0.3.0

## [0.2.4](https://github.com/miaoxing/services/compare/v0.2.3...v0.2.4) (2020-09-27)





### Dependencies

* **@miaoxing/plugin:** upgrade from 0.2.3 to 0.2.4

## [0.2.3](https://github.com/miaoxing/services/compare/v0.2.2...v0.2.3) (2020-09-25)


### Features

* 增加 coll 和 item 相关操作的 trait ([3bf4abb](https://github.com/miaoxing/services/commit/3bf4abb88d84c7e96c0251835ebafdbf69e1d3d3))
* **Convention:** getModelName 支持传入页面匿名类 ([fd7d374](https://github.com/miaoxing/services/commit/fd7d3740210e20e29ce6e7d353dab9d88bf45acf))





### Dependencies

* **@miaoxing/dev:** upgrade from 6.1.1 to 6.1.2
* **@miaoxing/plugin:** upgrade from 0.2.2 to 0.2.3

## [0.2.2](https://github.com/miaoxing/services/compare/v0.2.1...v0.2.2) (2020-09-06)


### Features

* 增加 jwt 登录 ([078723e](https://github.com/miaoxing/services/commit/078723e89969006cbd65e8e2d31ab1170ccfedf5))





### Dependencies

* **@miaoxing/plugin:** upgrade from 0.2.1 to 0.2.2

## [0.2.1](https://github.com/miaoxing/services/compare/v0.2.0...v0.2.1) (2020-09-01)





### Dependencies

* **@miaoxing/plugin:** upgrade from 0.2.0 to 0.2.1

# [0.2.0](https://github.com/miaoxing/services/compare/v0.1.7...v0.2.0) (2020-09-01)


### Code Refactoring

* 后端控制器改为 page 模式 ([bc8fb49](https://github.com/miaoxing/services/commit/bc8fb497d799b8b0effce5179f4bc5b1c2d895ff))


### BREAKING CHANGES

* 后端控制器改为 page 模式





### Dependencies

* **@miaoxing/plugin:** upgrade from 0.1.7 to 0.2.0

## [0.1.7](https://github.com/miaoxing/services/compare/v0.1.6...v0.1.7) (2020-08-17)





### Dependencies

* **@miaoxing/dev:** upgrade from 6.1.0 to 6.1.1
* **@miaoxing/plugin:** upgrade from 0.1.6 to 0.1.7

## [0.1.6](https://github.com/miaoxing/services/compare/v0.1.5...v0.1.6) (2020-08-14)





### Dependencies

* **@miaoxing/dev:** upgrade from 6.0.0 to 6.1.0
* **@miaoxing/plugin:** upgrade from 0.1.5 to 0.1.6

## [0.1.5](https://github.com/miaoxing/services/compare/v0.1.4...v0.1.5) (2020-08-14)





### Dependencies

* **@miaoxing/dev:** upgrade from  to 0.1.0
* **@miaoxing/plugin:** upgrade from 0.1.4 to 0.1.5

## [0.1.4](https://github.com/miaoxing/services/compare/v0.1.3...v0.1.4) (2020-08-11)





### Dependencies

* **@miaoxing/plugin:** upgrade from 0.1.3 to 0.1.4

## [0.1.3](https://github.com/miaoxing/services/compare/v0.1.2...v0.1.3) (2020-08-07)


### Features

* 增加 *Action 类，通过组合的方式简化常用的 CRUD 操作 ([92ef8e8](https://github.com/miaoxing/services/commit/92ef8e88bd8f365bcce7be9716fcd9ddbf3df9a8))





### Dependencies

* **@miaoxing/plugin:** upgrade from 0.1.2 to 0.1.3

## [0.1.2](https://github.com/miaoxing/services/compare/v0.1.1...v0.1.2) (2020-08-06)





### Dependencies

* **@miaoxing/plugin:** upgrade from 0.1.1 to 0.1.2

## [0.1.1](https://github.com/miaoxing/services/compare/v0.1.0...v0.1.1) (2020-08-01)


### Features

* Share 服务加入 wei 中 ([17a9605](https://github.com/miaoxing/services/commit/17a96057f39c258a52ef2e495f22f061cbd4243a))





### Dependencies

* **@miaoxing/plugin:** upgrade from 0.1.0 to 0.1.1

# 0.1.0 (2020-07-30)


### Features

* init
