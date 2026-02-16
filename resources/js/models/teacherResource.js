export default {
    'name' : 'profesores',
    'routes' : {
        index: () => route("teacher.index"),
        create: () => route("teacher.create"),
        store: () => route("teacher.store"),
        edit: (id) => route("teacher.edit", id),
        update: (id) => route("teacher.update", id),
        delete: (id) => route("teacher.destroy", id)
    }
}