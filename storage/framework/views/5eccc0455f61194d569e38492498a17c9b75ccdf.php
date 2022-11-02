<div x-data="window.bitflanFormattersComponent('javascript')">
    <div class="form-group">
        <label class="custom-label"><?php echo e(trans('webtools/tools/js-minifier.label')); ?></label>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <div class="form-group position-relative">
                    <button @click="window.writeClipboardText($event, editor.getValue())" class="btn custom--btn button__md ace-copy-btn btn__dark"><?php echo e(trans('webtools/general.copy')); ?></button>
                    <div x-ref="editor" id="editor"></div>
                </div>
            </div>
        </div>
    </div>
    <button x-on:click="minifyJs()" class="btn custom--btn button__lg"><?php echo e(trans('webtools/tools/js-minifier.submit')); ?></button>
</div><?php /**PATH /home/musab/Documents/cyber-tools/full/resources/views/modules/tools/js-minifier/view.blade.php ENDPATH**/ ?>