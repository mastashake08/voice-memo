<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">My Memos</div>

                    <div class="panel-body">
                      <textarea class="form-control" v-model="memo.content"></textarea>
                      <button class="btn" v-on:click="addMemo()"></button>
                        <ul v-for="memos in memo">
                          <li>{{memo}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
          memos: [],
          isSpeaking: false,
          dictionary: ['add memo','add note'],
          recognition: null,
          speechRecognitionList: null,
          memo: {content:''}
        },
        methods: {

        },
       created() {
         //initialize recognition components
         this.recognition = new SpeechRecognition();
         this.speechRecognitionList = new SpeechGrammarList();
       }
    }
</script>
