<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form id="contact" wire:submit.prevent="store">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <h2>Leave your review here</h2>
            </div>
            <div class="col-lg-12">
                <fieldset>
                    @error('subject') <span class="text-danger">{{$message}}</span>@enderror
                    <input wire:model="subject" name="subject" type="text" id="subject" placeholder="SUBJECT..." required="">
                </fieldset>
            </div>
            <div class="col-lg-12">
                <fieldset>
                    @error('review') <span class="text-danger">{{$message}}</span>@enderror
                    <textarea wire:model="review" name="review" type="text" class="form-control" id="review" placeholder="YOUR REVIEW..." required=""></textarea>
                </fieldset>
            </div>
            @error('rate') <span class="text-danger">{{$message}}</span>@enderror
            <div class="rating col-lg-7">
                <input type="radio" name="star" id="star1" wire:model="rate" value="5"><label for="star1"></label>
                <input type="radio" name="star" id="star2" wire:model="rate" value="4"><label for="star2"></label>
                <input type="radio" name="star" id="star3" wire:model="rate" value="3"><label for="star3"></label>
                <input type="radio" name="star" id="star4" wire:model="rate" value="2"><label for="star4"></label>
                <input type="radio" name="star" id="star5" wire:model="rate" value="1"><label for="star5"></label>
            </div>
            <div class="col-lg-12" style="margin-top: 30px;">
                <fieldset>
                    @auth()
                        <button type="submit" id="form-submit" class="button">SUBMIT REVIEW</button>
                    @else
                        <div class="main-button-red">
                            <div><a href="/login">TO SUBMIT PLEASE LOGIN</a></div>
                        </div>
                    @endauth
                </fieldset>
            </div>
        </div>
    </form>
</div>
