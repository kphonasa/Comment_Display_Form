<template>
    <form method="POST" action="/submit" ><!--@submit.prevent="onSubmit">-->

        <div class="form-group row">
            <label for="authorName" class="col-sm-3 col-form-label">Author Name</label>
            <div class="col-sm-9">
                <input name="authorName" type="text" class="form-control" id="authorName" placeholder="Name Thy Self!">
               <!-- <div v-if="errors && errors.authorName" class="text-danger">{{ errors.authorName[0] }}</div>-->
            </div>
        </div>
        <div class="form-group row">
            <label for="authorEmail" class="col-sm-3 col-form-label">Author Email</label>
            <div class="col-sm-9">
                <input name="authorEmail" type="email" class="form-control" id="authorEmail" placeholder="Don't Let Your Dreams Become Memes">
              <!--  <div v-if="errors && errors.authorEmail" class="text-danger">{{ errors.authorEmail[0] }}</div>-->
            </div>
        </div>
        <div class="form-group row">
            <label for="authorComment" class="col-sm-3 col-form-label">Comment</label>
            <div class="col-sm-9">
                <textarea name="authorComment" class="form-control" id="authorComment" placeholder="Roast Me!"></textarea>
                <!--<div v-if="errors && errors.authorComment" class="text-danger">{{ errors.authorComment[0] }}</div>-->
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Save Forever</button>
            </div>
            <<!--div v-if="success" class="alert alert-success mt-3">
                Your sick burn has been sent!
            </div>-->
        </div>
    </form>
</template>

<!--<script>
    export default {
        data() {
            return {
                fields: {},
                errors: {},
                success: false,
                loaded: true,
            }
        },
        methods: {
            onSubmit() {
                if (this.loaded) {
                    this.loaded = false;
                    this.success = false;
                    this.errors = {};
                    // Clear fields if success
                    axios.post('/submit', this.fields).then(response => {
                        this.fields = {};
                        this.loaded = true;
                        this.success = true;
                    }).catch(error => {
                        this.loaded = true;
                        if (error.response.status === 422) {
                            this.errors = error.response.data.errors || {};
                        }
                    });
                }
            },
        },
    }
</script>-->
