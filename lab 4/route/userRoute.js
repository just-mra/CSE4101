const router = require('express').Router()
const { getUserInfoForm, postUserInfoForm } = require('../controller/userController')

router.get('/', getUserInfoForm)
router.post('/', postUserInfoForm)

module.exports = router