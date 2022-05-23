module.exports = (sequelize, DataTypes) => {
    const Users = sequelize.define('users', {
        firstName: {
            type: DataTypes.STRING
        },
        lastName: {
            type: DataTypes.STRING
        },
        department: {
            type: DataTypes.STRING
        },
        roll: {
            type: DataTypes.INTEGER
        },
        gender: {
            type: DataTypes.STRING
        },
        email: {
            type: DataTypes.STRING
        },
        mobileNumber: {
            type: DataTypes.STRING
        },
        icecreamFlavor: {
            type: DataTypes.STRING
        },
        address: {
            type: DataTypes.STRING
        },
        district: {
            type: DataTypes.STRING
        }
    }, {
        timestamps: true
    })

    return Users
}