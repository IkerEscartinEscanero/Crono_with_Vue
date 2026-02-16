export default {
    'name' : 'estudiantes',
    'routes' : {
        index: () => route("student.index"),
        create: () => route("student.create"),
        store: () => route("student.store"),
        edit: (id) => route("student.edit", id),
        update: (id) => route("student.update", id),
        delete: (id) => route("student.destroy", id)
    }
}