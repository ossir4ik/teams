<?php

namespace App\Controllers;


use App\Entities\School;
use App\Entities\Team;
use App\Models\schoolModel;
use App\Models\trainerModel;
use App\Models\trainingModel;
use function PHPUnit\Framework\throwException;
class TeamController extends BaseController
{
    private $teamModel;
    private $schoolModel;
    private $trainerModel;
    private $trainingModel;

    public function __construct()
    {
        $this->teamModel = new \App\Models\teamModel();
        $this->schoolModel = new \App\Models\schoolModel();
        $this->trainerModel = new \App\Models\trainerModel();
        $this->trainingModel = new \App\Models\trainingModel();

    }

    public function index(): string
    {
        $data = $this->teamModel->findAll();

        return view('team\index',[
            'teams'=> $data,
            'title' => 'Teams list',
        ]);
    }


    public function show($id)
    {
        $team =$this->getTeamOr404($id);
        $school = $this->schoolModel->find($team->school_id);
        $trainer = $this->trainerModel->find($team->trainer_id);
        $training = $this->trainingModel->find($team->training_id);

        return view('team/show',[
            'team'=> $team,
            'school'=>$school,
            'trainer'=>$trainer,
            'training'=>$training,
            'title' => 'Team info',
        ]);
    }

    public function new()
    {
        $school = $this->schoolModel->findAll();
        $trainer = $this->trainerModel->findAll();
        $training = $this->trainingModel->findAll();
        return view('team/new',[
            'schools'=>$school,
            'trainers'=>$trainer,
            'trainings'=>$training,
            'title' => 'Team creating',
        ]);
    }

    public function store()
    {

        $data = new Team($this->request->getPost());


        if($this->teamModel->insert($data)){
            return redirect()
                ->to('')
                ->with('success','team created')
                ->with('data', $data);
        }else{
            return redirect()
                ->back()
                ->withInput($data)
                ->with('errors',$this->teamModel->errors());
        }
    }

    public function edit($id)
    {

        $school = $this->schoolModel->findAll();
        $trainer = $this->trainerModel->findAll();
        $training = $this->trainingModel->findAll();
        $team =$this->getTeamOr404($id);

        return view('team/edit',[
            'team'=> $team,
            'schools'=>$school,
            'trainers'=>$trainer,
            'trainings'=>$training,
            'title' => 'Team editing',
        ]);
    }

    public function update($id)
    {
        $team =$this->getTeamOr404($id);

        $team->fill($this->request->getPost());

        if(!$team->hasChanged()){
            return redirect()
                ->back()
                ->withInput($team)
                ->with('errors',['Nothing to update']);
        }

        if($this->teamModel->save($team)){
            return redirect()
                ->to('')
                ->with('success','team update')
                ->with('data', $team);
        }else{
            return redirect()
                ->back()
                ->withInput($team)
                ->with('errors',$this->teamModel->errors());
        }
    }

    public function delete($id)
    {
        $team = $this->getTeamOr404($id);

        if($this->teamModel->delete($id)){
            return redirect()
                ->to('')
                ->with('success','team deleted');
        }else{
            return redirect()
                ->back()
                ->with('errors',$this->teamModel->errors());
        }

    }

    public function getTeamOr404($id)
    {
        $team = $this->teamModel->find($id);

        if($team === null){
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Task with: $id not found!");
        }

        return $team;
    }

    public function getTrainingOr404($id)
    {
        $training = $this->trainingModel->find($id);

        if($training === null){
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Task with: $id not found!");
        }

        return $training;
    }



}