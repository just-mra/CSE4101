const db = require('../model/database')
const Users = db.users

exports.getUserInfoForm = async(req, res, next) => {
    return res.render('user/user_info')
}

exports.postUserInfoForm = async(req, res, next) => {
    try {
        let { firstName, lastName, department, roll, gender, email, mobileNumber, icecreamFlavor, address, district } = req.body
        const createdUserInfo = await Users.create({
            firstName,
            lastName,
            department,
            roll,
            gender,
            email,
            mobileNumber,
            icecreamFlavor,
            address,
            district
        })
        console.log(createdUserInfo)
        return res.redirect('/user')
    } catch (e) {
        console.log(e)
    }
}