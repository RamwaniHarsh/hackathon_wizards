# Requirements for scheduling functionality

# Input Data:
# 1. games: list of strings representing the names of games - Which gane
# 2. number_of_teams: integer representing the number of teams in each game
# 3. venues: list of dictionaries, each dictionary representing a venue with keys 'name' and 'capacity'
# 4. time_slots: list of dictionaries, each dictionary representing a time slot with keys 'start_time' and 'end_time'
# 5. player_rest_time: integer representing the minimum rest time for players in minutes
# 6. game_time: integer representing the length of a game in minutes
# 7. travel_time: integer representing the time it takes for teams to travel between venues in minutes
# 8. TV_broadcast_schedule: list of dictionaries, each dictionary representing a TV broadcast schedule with keys 'start_time' and 'end_time'
# 9. How many games can be possible at one time?: no. of games at one time: integer representing no of games (parallel games based on resources)
""" input_data = {
    'games': [],
    'number_of_teams': 0,
    'venues': [],
    'time_slots': [],
    'player_rest_time': 0,
    'game_time': 0,
    'travel_time': 0,
    'TV_broadcast_schedule': [],
    'No_of_games': 0
} """

input_data = {
    'games': ['Game 1', 'Game 2', 'Game 3', 'Game 4'],
    'number_of_teams': 6,
    'venues': [{'name': 'Venue 1', 'capacity': 1000}, {'name': 'Venue 2', 'capacity': 500}],
    'time_slots': [{'start_time': '10:00 AM', 'end_time': '12:00 PM'}, {'start_time': '1:00 PM', 'end_time': '3:00 PM'}],
    'player_rest_time': 30,
    'game_time': 60,
    'travel_time': 30,
    'TV_broadcast_schedule': [{'start_time': '10:00 AM', 'end_time': '12:00 PM'}],
}


from datetime import datetime, time, timedelta

def generate_schedule(input_data):
    schedule = []
    games = input_data['games']
    number_of_teams = input_data['number_of_teams']
    venues = input_data['venues']
    time_slots = input_data['time_slots']
    player_rest_time = input_data['player_rest_time']
    game_time = input_data['game_time']
    travel_time = input_data['travel_time']
    TV_broadcast_schedule = input_data['TV_broadcast_schedule']
    
    # convert start and end time of time slots and TV broadcast schedules to datetime objects
    for i in range(len(time_slots)):
        time_slots[i]['start_time'] = datetime.strptime(time_slots[i]['start_time'], '%I:%M %p')
        time_slots[i]['end_time'] = datetime.strptime(time_slots[i]['end_time'], '%I:%M %p')

    for i in range(len(TV_broadcast_schedule)):
        TV_broadcast_schedule[i]['start_time'] = datetime.strptime(TV_broadcast_schedule[i]['start_time'], '%I:%M %p')
        TV_broadcast_schedule[i]['end_time'] = datetime.strptime(TV_broadcast_schedule[i]['end_time'], '%I:%M %p')
    
    # assign games to venues and time slots
    game_index = 0
    venue_index = 0
    time_slot_index = 0
    while game_index < len(games):
        current_venue = venues[venue_index]
        current_time_slot = time_slots[time_slot_index]
        current_game_start_time = current_time_slot['start_time'] + timedelta(minutes=player_rest_time)
        current_game_end_time = current_game_start_time + timedelta(minutes=game_time)
        
        # check if the current game fits in the current time slot and venue
        if current_game_end_time + timedelta(minutes=travel_time) <= current_time_slot['end_time']:
            # check if the current game fits in the TV broadcast schedule
            is_broadcast = False
            for broadcast_schedule in TV_broadcast_schedule:
                if current_game_start_time >= broadcast_schedule['start_time'] and current_game_end_time <= broadcast_schedule['end_time']:
                    is_broadcast = True
                    break
            
            # add the current game to the schedule
            schedule.append({
                'game': games[game_index],
                'venue': current_venue['name'],
                'start_time': current_game_start_time,
                'end_time': current_game_end_time,
                'is_broadcast': is_broadcast
            })
            game_index += 1
        
        # move to the next venue and time slot
        venue_index = (venue_index + 1) % len(venues)
        if venue_index == 0:
            time_slot_index = (time_slot_index + 1) % len(time_slots)
    
    return schedule

# Call the generate_schedule function with the input_data
schedule = generate_schedule(input_data)

# Present the schedule to the admin for review and approval
print("Generated Schedule:")
for game in schedule:
    print("Game:", game['game'], "Venue:", game['venue'], "Start Time:", game['start_time'].strftime("%I:%M %p"), "End Time:", game['end_time'].strftime("%I:%M %p"), "Broadcast:", game['is_broadcast'])

# Present the schedule to the admin for review and approval
def present_schedule_to_admin(schedule):
    # prompt the admin for approval
    approval = input("Do you approve the generated schedule? (yes/no)")
    if approval.lower() == 'yes':
        return True
    else:
        return False

# Allow admin to make necessary changes
def update_schedule(schedule):
    # prompt the admin for changes
    changes = input("Enter the game numbers to be updated separated by comma:")
    if changes:
        changes = [int(x) - 1 for x in changes.split(',')]
        for game_index in changes:
            game = schedule[game_index]
            print("Updating game:", game['game'], "Venue:", game['venue'], "Start Time:", game['start_time'].strftime("%I:%M %p"), "End Time:", game['end_time'].strftime("%I:%M %p"), "Broadcast:", game['is_broadcast'])
            # update the game venue
            new_venue = input("Enter the new venue:")
            if new_venue:
                game['venue'] = new_venue
            # update the start time
            new_start_time = input("Enter the new start time (hh:mm am/pm):")
            if new_start_time:
                game['start_time'] = datetime.strptime(new_start_time, "%I:%M %p")
            # update the end time
            new_end_time = input("Enter the new end time (hh:mm am/pm):")
            if new_end_time:
                game['end_time'] = datetime.strptime(new_end_time, "%I:%M %p")
            # update the broadcast status
            new_broadcast = input("Enter the new broadcast status (yes/no):")
            if new_broadcast:
                game['is_broadcast'] = (new_broadcast.lower() == 'yes')
    return schedule

# Call the present_schedule_to_admin function with the generated schedule
schedule_approved = present_schedule_to_admin(schedule)

if schedule_approved == True:
    print("The schedule has been approved by the admin.")
else:
    print("The schedule has not been approved by the admin.")
    # Call the update_schedule function with the generated schedule
    schedule = update_schedule(schedule)

