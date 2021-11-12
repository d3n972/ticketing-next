<form class="dark:text-gray-100 form" wire:submit.prevent="save">
    <section class="block--timer flex-1 gap-2">
        <script>
          function timer(expiry) {
            return {
              expiry: expiry,
              remaining: null,
              stop: true,
              init() {
                this.setRemaining()
                setInterval(() => {
                  this.setRemaining();
                }, 1000);
              },
              get() {
                return `${this.days().remaining % 3600}:${this.hours().remaining % 60}:${this.minutes().remaining}`
              },
              setRemaining() {
                if (this.stop != false) {
                  return;
                }
                const diff = new Date().getTime() - this.expiry;
                this.remaining = parseInt(diff / 1000);
              },
              days() {
                return {
                  value: this.remaining / 86400,
                  remaining: this.remaining % 86400
                };
              },
              hours() {
                return {
                  value: this.days().remaining / 3600,
                  remaining: this.days().remaining % 3600
                };
              },
              minutes() {
                return {
                  value: this.hours().remaining / 60,
                  remaining: this.hours().remaining % 60
                };
              },
              seconds() {
                return {
                  value: this.minutes().remaining,
                };
              },
              format(value) {
                return ("0" + parseInt(value)).slice(-2)
              },
              toggle_status() {
                this.stop = !this.stop;
              },
              status() {
                return this.stop;
              },
              time() {
                if(!this.stop) {
                  Livewire.emit('work_time_elapsed', `${this.format(this.hours().value)}:${this.format(this.minutes().value)}:${this.format(this.seconds().value)}`)
                }
                return {
                  days: this.format(this.days().value),
                  hours: this.format(this.hours().value),
                  minutes: this.format(this.minutes().value),
                  seconds: this.format(this.seconds().value),
                  full: `${this.format(this.hours().value)}:${this.format(this.minutes().value)}:${this.format(this.seconds().value)}`,
                  status: this.stop
                }
              },
            }
          }

        </script>

        <span>
        <label for="time_worked">
            Time worked:
        </label>
    </span>

        <div class="form-group" x-data="timer(new Date())" x-init="init();">

            <div class="timer" x-data="timer(new Date())" x-init="init();">
            </div>
            <input type="text" wire:model="time" x-bind="{value:time().full}" class="dark:text-black form-control short"
                   name="time"
                   id="time" size="10" placeholder="00:00:00"
                   x-ref="input">
            <button type="button"  @click="toggle_status();" id="pause_btn"
                    title="Start / Stop">
                <i x-show="status()" class="bi bi-play-circle text-2xl"></i>
                <i x-show="!status()" class="bi bi-x-circle text-2xl"></i>
            </button>

        </div>

    </section>
    <div class="block--message" id="message-block">
                    <textarea
                            wire:model="message"
                            name="message" id="message" placeholder="Type your message"
                            class="h-96 text-black w-full"></textarea>
    </div>
    <div class="flex gap-5">
        <button class="bg-green-600 p-1 px-3 rounded">Save</button>
        <button type="button"  class="bg-red-600 p-1 px-3 rounded">Close</button>
    </div>
</form>