export function is_array (array) {
    return Array.isArray(array)
}

export function as_array (array) {
    return JSON.parse(JSON.stringify(Array.isArray(array) ? array : []))
}

export function in_array (array, neddle) {
    return (Array.isArray(array) ? array : []).indexOf(neddle) !== -1
}

export function take (array, key, dflt = undefined) {
    try {
        return key.toString().split('.').reduce((a,k) => a[k], array) || dflt
    } catch (e) {
        return dflt
    }
}

export function rescue (callable, instead) {
    try {
        return callable()
    } catch (ex) {
        return instead || undefined
    }
}

export function filled (value) {
    if (typeof value === 'string') {
        return value.length > 0
    }
    if (Array.isArray(value)) {
        return value.length > 0
    }
    return !! value
}
