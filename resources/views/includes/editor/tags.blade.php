<div class="form-control">
    <div class="form-label input-label">
        <label>Теги</label>
    </div>
    <?php
        $items = \App\Models\Tag::all();

    ?>
    <div class="form-element">
        <select id="tags" name="tags[]" tabindex="-1" class="width-4 chzn-select chzn-done" multiple="multiple"
                data-placeholder=" " size="2" style="display: none;">
            @foreach($items as $item)
                @if(@$post)
                    @if($post->tags->contains($item))
                        <option selected>{{ $item->name }}</option>
                    @else
                        <option>{{ $item->name }}</option>
                    @endif
                @else
                    <option>{{ $item->name }}</option>
                @endif
            @endforeach
        </select>
    </div>
</div>
