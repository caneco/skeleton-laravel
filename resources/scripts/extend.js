Array.prototype.inArray = function (needle) {
    return this.indexOf(needle) >= 0
}

String.prototype.chop = function (separator) {
    var list = this.split(separator)
    if (list[0] == '' && list.length == 1) return []
    return list
}

String.prototype.capitalize = function () {
    return this.charAt(0).toUpperCase() + this.slice(1)
}

window.l = console.log
