export default {
    'name' : 'usuarios',
    'routes' : {
        index: () => route("users.index"),
        create: () => route("users.create"),
        store: () => route("users.store"),
        edit: (id) => route("users.edit", id),
        update: (id) => route("users.update", id),
        delete: (id) => route("users.destroy", id)
    }
}