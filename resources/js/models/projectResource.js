export default {
    'name' : 'proyecto',
    'routes' : {
        index: () => route("projects.index"),
        create: () => route("projects.create"),
        store: () => route("projects.store"),
        edit: (id) => route("projects.edit", id),
        update: (id) => route("projects.update", id),
        delete: (id) => route("projects.destroy", id)
    }
}