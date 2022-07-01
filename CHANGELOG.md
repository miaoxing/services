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
