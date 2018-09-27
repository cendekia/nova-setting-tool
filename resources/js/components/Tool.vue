<template>
    <div>
        <heading class="mb-6">Setting Tool</heading>
        <tabs v-if="installed">
            <tab name="Application Site">
                <div class="card overflow-hidden">
                    <form @submit.prevent="updateSetting">
                        <div>
                            <div class="flex border-b border-40">
                                <div class="w-1/4 px-8 py-6">
                                    <label class="inline-block text-80 h-9 pt-2">Site Name</label>
                                    <p class="text-sm leading-normal text-80 italic"></p>
                                </div>
                                <div class="w-3/4 px-8 py-6">
                                    <input v-model="app.name" placeholder="Application name or Website title" type="text" class="w-full form-control form-input form-input-bordered">
                                </div>
                            </div>
                            <div class="flex border-b border-40">
                                <div class="w-1/4 px-8 py-6">
                                    <label class="inline-block text-80 h-9 pt-2">Site Url</label>
                                    <p class="text-sm leading-normal text-80 italic"></p>
                                </div>
                                <div class="w-3/4 px-8 py-6">
                                    <input :value="app.url" placeholder="Application url" type="text" class="w-full form-control form-input form-input-bordered" disabled>
                                </div>
                            </div>
                            <div class="flex border-b border-40">
                                <div class="w-1/4 px-8 py-6">
                                    <label class="inline-block text-80 h-9 pt-2">Copyright</label>
                                    <p class="text-sm leading-normal text-80 italic"></p>
                                </div>
                                <div class="w-1/4 px-8 py-6">
                                    <input v-model="app.copyright.year" placeholder="Year of copyrighting" type="year" class="w-full form-control form-input form-input-bordered">
                                </div>
                                <div class="w-1/2 px-8 py-6 pl-0">
                                    <input v-model="app.copyright.owner" placeholder="Owner of the app" type="text" class="w-full form-control form-input form-input-bordered">
                                </div>
                            </div>
                            <div class="flex border-b border-40">
                                <div class="w-1/4 px-8 py-6"></div>
                                <div class="w-3/4 px-8 py-6">
                                    <input v-model="app.copyright.text" placeholder="Copyright text" type="text" class="w-full form-control form-input form-input-bordered">
                                </div>
                            </div>
                            <div class="flex border-b border-40">
                                <div class="w-1/4 px-8 py-6">
                                    <label class="inline-block text-80 h-9 pt-2" for="Version">Version</label>
                                    <p class="text-sm leading-normal text-80 italic"></p>
                                </div>
                                <div class="w-1/4 px-8 py-6">
                                    <input v-model="app.version" placeholder="App version" type="text" class="w-full form-control form-input form-input-bordered">
                                </div>
                            </div>
                        </div>
                        <div class="bg-30 flex px-8 py-4">
                            <button type="submit" class="ml-auto btn btn-default btn-primary mr-3">
                                Update Setting
                            </button>
                        </div>
                    </form>
                </div>
            </tab>
            <tab name="Administration Panel">
                <div class="card overflow-hidden">
                    <form @submit.prevent="updateSetting">
                        <div>
                            <div class="flex border-b border-40">
                                <div class="w-1/4 px-8 py-6">
                                    <label class="inline-block text-80 h-9 pt-2">Admin Name</label>
                                    <p class="text-sm leading-normal text-80 italic"></p>
                                </div>
                                <div class="w-3/4 px-8 py-6">
                                    <input v-model="admin.name" placeholder="Admin panel name" type="text" class="w-full form-control form-input form-input-bordered">
                                </div>
                            </div>
                            <div class="flex border-b border-40">
                                <div class="w-1/4 px-8 py-6">
                                    <label class="inline-block text-80 h-9 pt-2">Admin Url</label>
                                    <p class="text-sm leading-normal text-80 italic"></p>
                                </div>
                                <div class="w-3/4 px-8 py-6">
                                    <input :value="admin.url" placeholder="Admin panel url" type="text" class="w-full form-control form-input form-input-bordered" disabled>
                                </div>
                            </div>
                            <div class="flex border-b border-40">
                                <div class="w-1/4 px-8 py-6">
                                    <label class="inline-block text-80 h-9 pt-2">Copyright</label>
                                    <p class="text-sm leading-normal text-80 italic"></p>
                                </div>
                                <div class="w-1/4 px-8 py-6">
                                    <input v-model="admin.copyright.year" placeholder="Year of copyrighting" type="year" class="w-full form-control form-input form-input-bordered">
                                </div>
                                <div class="w-1/2 px-8 py-6 pl-0">
                                    <input v-model="admin.copyright.owner" placeholder="Owner of the app" type="text" class="w-full form-control form-input form-input-bordered">
                                </div>
                            </div>
                            <div class="flex border-b border-40">
                                <div class="w-1/4 px-8 py-6"></div>
                                <div class="w-3/4 px-8 py-6">
                                    <input v-model="admin.copyright.text" placeholder="Copyright text" type="text" class="w-full form-control form-input form-input-bordered">
                                </div>
                            </div>
                            <div class="flex border-b border-40">
                                <div class="w-1/4 px-8 py-6">
                                    <label class="inline-block text-80 h-9 pt-2" for="Version">Version</label>
                                    <p class="text-sm leading-normal text-80 italic"></p>
                                </div>
                                <div class="w-1/4 px-8 py-6">
                                    <input id="Version" v-model="admin.version" placeholder="Admin version" type="text" class="w-full form-control form-input form-input-bordered">
                                </div>
                            </div>
                        </div>
                        <div class="bg-30 flex px-8 py-4">
                            <button type="submit" class="ml-auto btn btn-default btn-primary mr-3">
                                Update Setting
                            </button>
                        </div>
                    </form>
                </div>
            </tab>
        </tabs>
        <card v-else>
            <template>
                <p class="px-6 py-8 text-80">
                    <span class="pr-4">Setting Tool is not installed yet.</span>
                    <button class="btn btn-default btn-primary" @click="installSetting">Install</button>
                </p>
            </template>
        </card>
    </div>
</template>

<script>


const setting = {
    name: null,
    copyright: {
        year: null,
        owner: null,
        text: null
    },
    version: null
}

export default {
    data() {
        return {
            installed: false,
            app: setting,
            admin: setting
        }
    },
    mounted() {
        this.installationCheck()
    },
    methods: {
        installationCheck() {
            Nova.request().get("/nova-vendor/setting-tool/installation-check")
                .then(response => {
                    this.installed = response.data.installed
                    if (this.installed) this.loadDefaultSetting()
                })
                .catch(() => this.error = true)
        },
        loadDefaultSetting() {
            Nova.request().get("/nova-vendor/setting-tool/default-setting")
                .then(response => {
                    this.app = response.data.setting.app
                    this.admin = response.data.setting.admin
                })
                .catch(() => this.error = true)
        },
        installSetting() {
            Nova.request().get("/nova-vendor/setting-tool/install-setting")
                .then((response) => {
                    this.installed = true
                    this.loadDefaultSetting()

                    this.$toasted.success(response.data.message, {
                        duration : 3000,
                        onComplete : () => window.location.reload(true)
                    })
                })
                .catch(() => this.error = true)
        },
        updateSetting() {
            Nova.request().put("/nova-vendor/setting-tool/update-setting", {app: this.app, admin: this.admin})
                .then(response => {
                    this.app = response.data.setting.app
                    this.admin = response.data.setting.admin

                    this.$toasted.success(response.data.message, {
                        duration : 3000,
                        onComplete : () => window.location.reload(true)
                    })
                })
                .catch(() => this.error = true)
        }
    }
}
</script>

<style>
/* Scoped Styles */
</style>
