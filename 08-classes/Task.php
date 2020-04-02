<?php

    class Task {
        protected $description;
        protected $completed = FALSE;

        /**
         * Task constructor.
         *
         * @param $description sting description of the task
         */
        public function __construct($description) {
            $this->description = $description;
        }

        /**
         *  To set the task to complete
         */
        public function complete() {
            $this->completed = TRUE;
        }

        /**
         * @return bool gives the status of the task
         */
        public function isComplete() {
            return $this->completed;
        }

        /**
         * @return sting returns the description of the task
         */
        public function description() {
            return $this->description;
        }

    }

    // to create one task
    $task = new Task('Go to the store');

    // to create an array of tasks
    $tasks = [
        new Task('Go to the store'),
        new Task('Get the Coffee'),
        new Task('Drink It'),
    ];
    $tasks[0]->complete();
    $tasks[1]->complete();
