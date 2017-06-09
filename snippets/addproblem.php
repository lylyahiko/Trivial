<form class="form-inline">
    <div class="form-group col-sm-12">
        <div class="row">
            <div class="col-sm-2">
                <label for="problem-type">Type: </label>
            </div>
            <div class="col-sm-10">
                <select style="width:100%;" id="problem-type" class="form-control">
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2">
                <label for="problem-text">Problem: </label>
            </div>
            <div class="col-sm-10">
                <textarea style="width:100%;" class="form-control" placeholder="Write the problem to be displayed here" id="problem-text" name="problem-text"></textarea>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2">
                <label for="answera">Answer A: </label>
            </div>
            <div class="col-sm-10">
                <input type="text" style="width:100%;" class="form-control" placeholder="Answer A" id="answera" name="answera">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2">
                <label for="answerb">Answer B: </label>
            </div>
            <div class="col-sm-10">
                <input type="text" style="width:100%;" class="form-control" placeholder="Answer B" id="answerb" name="answerb">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2">
                <label for="answerc">Answer C: </label>
            </div>
            <div class="col-sm-10">
                <input type="text" style="width:100%;" class="form-control" placeholder="Answer C" id="answerc" name="answerc">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2">
                <label for="answerd">Answer D: </label>
            </div>
            <div class="col-sm-10">
                <input type="text" style="width:100%;" class="form-control" placeholder="Answer D" id="answerd" name="answerd">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2">
                <label for="correct-answer">Correct Answer: </label>
            </div>
            <div class="col-sm-10">
                <select style="width:100%;" id="correct-answer" class="form-control">
                    <option value="0">Answer A</option>
                    <option value="1">Answer B</option>
                    <option value="2">Answer C</option>
                    <option value="3">Answer D</option>
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12" style="text-align:center;">
                <button type="button" style="width:30%;" class="form-control btn btn-primary" id="addSubmit">Submit</button>
            </div>
        </div>
    </div>
</form>